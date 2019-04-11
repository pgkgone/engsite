<html>
<head>
    <div class="logo"> <img src="images/logo_small.png" height="100" width="100"></div>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <style type="text/css">
        .main-menu-button{
            margin-top: 5px;
        }
        .next-button{
            margin-top: 5px;
        }
        .task-text{
            margin-left: 21px;
        }
    </style>
    <script>
        var urls = ["2.mp4","3.mp4"];
        var curl = 0;
        function changeURL(frame)
        {
            if(curl == 0)
            {
                frame.src = urls[0];
                curl = 1;
            }
            else
            {
                frame.src = urls[1];
                curl = 0;
            }
        }
    </script>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<?php
class ContentProcessor{
    public $InputNumber = 0;
    public $InputKeys = array();

    function InputProcessor(&$content)
    {
        while (($pos = strpos($content, "input{")) != false){
            $content = substr_replace($content, "", $pos, 6);
            $posend = strpos($content, "}");
            $content = substr_replace($content, "", $posend, 1);
            $key = substr($content, $pos, $posend - $pos);
            $content = substr_replace($content, "", $pos, $posend - $pos);
            $InputKeys[$this->InputNumber] = $key;
            $content = substr_replace($content, $this->PasteInputbox($InputKeys[$this->InputNumber--]), $pos, 0 );
            $this->InputNumber++;
        }
    }

    function PasteInputbox($placeholder){
        $inputbox =
            '
            <input type="text" size="20" placeholder="'.$placeholder.'">
        ';
        return $inputbox;
    }
}

function returnHref($a,$b){
    return "'"."tests.php?title=".$a."&part=".$b."'";
}
function createButtonsList(){
    echo <<<EOT
     <div class="buttonList" align="center">
        <div class="menu-buttons">
EOT;
    $part = (int)$_GET['part'];
    $title= (int)$_GET['title'];
    if($part>0){
        echo '<input type="button" class="prev-button btn-primary" value="Prev part" onclick="location.href = '.returnHref($title,$part-1).'">';
    }
    echo  '<input type="button" class="main-menu-button btn-primary" value="Main menu" onclick="location.href = \'index.php\'" />';
    if($part<4){
        echo '<input type="button" class="next-button btn-primary" value="Next part" onclick="location.href = '.returnHref($title,$part+1).'">';
    }
    echo <<<EOT
</div>
</div>
EOT;
}

function createFor1stPart(){
    echo '<select id="videoSelector"><option>Video 1</option><option>Video 2</option><option>Video 3</option><option>Video 4</option><option>Video 5</option><option>Video 6</option></select>';
    $partsAlpha = array("A", "B", "C", "D", "E","F","G","H");
    $DB = new SQLite3("db.sqlite");
    $result=(string)$DB->query("SELECT content FROM tests WHERE title = ". $_GET["title"]." AND part = ".   $_GET["part"]. "")->fetchArray()[0];
    $arr=explode("|",$result);
    for($i=0;$i<8;$i++){
        echo "<h3 style='margin-left: 5vh'>$arr[$i]</h3>";
    }
    echo "<div style='display: inline-block; margin-left: 5vh'>";
    for($i=0;$i<8;$i++){
        echo '<a>'.$partsAlpha[$i].': </a><select id="selectItem" style="margin-right: 2vh"><option id="A">A</option><option id="B">B</option><option id="C">C</option><option id="D">D</option><option id="E">E</option><option id="F">F</option><option id="G">G</option><option id="H">H</option></select>';
    }
    echo "</div>";
}

function setBeautyTitle(){
    $DB = new SQLite3("db.sqlite");
    $part = (int)$_GET['part']+1;
    $title= (int)$_GET['title']+1;
    $partsRome = array("I", "II", "III", "IV", "V");
    $title=$DB->query("SELECT title FROM MENU WHERE id =".$title.";")->fetchArray()[0];
    echo "<title>".$title.": Part — ".$partsRome[$part-1]."</title>";
}
?>
<body>
<div class="content">
    <div class="header">
        <div class="Part 1">
            <h1 align="center"><span>Part I</span></h1>
        </div>
        <div class="task">
            <a class="task-text"> You will watch six short video films about some great discoveries in physics made by outstanding scientists.
                As you watch match the videos 1-6 with the appropriate headingsA-H in the text.
                There are two extra headings which you do not need to use.
            </a>
            <video id='my-video' class='video-js' controls preload='auto' width='640' height='264' data-setup='{}'>
                <p class='vjs-no-js'>
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                </p>
            </video>
        </div>
    </div>
    <?php
    setBeautyTitle();
    createButtonsList();
    if((int)$_GET['part']==0){
        createFor1stPart();
    }else {
        $DB = new SQLite3("db.sqlite");
        $result = $DB->query("SELECT content FROM tests WHERE title = " . $_GET["title"] . " AND part = " . $_GET["part"] . "");
        $Processor = new ContentProcessor();
        $content = $result->fetchArray()[0];
        $Processor->InputProcessor($content);
        echo $content;
        echo '</div>';
    }
    createButtonsList();
    ?>
</div>
<script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
<input type="button" value="Сменить" onclick="changeURL(document.getElementById('myframe'))">
<script>
    var myVideo = videojs('my-video');
    var dropdown = document.getElementById('videoSelector');
    dropdown.addEventListener("change", function() {
        var source = dropdown.selectedIndex;
        console.log(source)
        if (source == 1) {
            myVideo.src([
                {src: "2.mp4", type: "video/mp4"},
            ]);
        } else if (source == 2) {
            myVideo.src([
                {src: "3.mp4", type: "video/mp4"},
            ]);
        }
    })
</script>
</body>
</html>