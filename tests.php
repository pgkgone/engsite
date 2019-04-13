<html>
<head>
    <div class="logo"> <img src="images/logo_small.png" height="100" width="100"></div>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css" >
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            $content = substr_replace($content, $this->PasteInputbox($this->InputNumber), $pos, 0 );
            $this->InputNumber++;
        }
    }

    function PasteInputbox($idtag){
        $inputbox =
            '
            <input type="text" size="20" id="inputItem'.$idtag.'">
        ';
        return $inputbox;
    }
}

function returnHref($a,$b){
    return "'"."tests.php?title=".$a."&part=".$b."'";
}
function createButtonsList(){
    echo <<<EOT
     <div class="buttonList" align="center" style="margin-bottom: 3vh">
        <div class="menu-buttons">
EOT;
    $part = (int)$_GET['part'];
    $title= (int)$_GET['title'];
    if($part>0){
        echo '<input type="button" class="prev-button btn-primary" value="Prev part" style="margin-right:0.75vw"  onclick="location.href = '.returnHref($title,$part-1).'">';
    }
    echo  '<input type="button" class="main-menu-button btn-primary" style="margin-right:0.75vw" value="Main menu" onclick="location.href = \'index.php\'" />';
    if($part<4){
        echo '<input type="button" class="next-button btn-primary" value="Next part" onclick="location.href = '.returnHref($title,$part+1).'">';
    }
    echo <<<EOT
</div>
</div>
EOT;
}

function createFor1stPart(){
    echo '<div align="center"><div style="display: inline-block"><a>Choose Video: </a><select id="videoSelector"><option>Video 1</option><option>Video 2</option><option>Video 3</option><option>Video 4</option><option>Video 5</option><option>Video 6</option></select></div></div>';
    $DB = new SQLite3("db.sqlite");
    $result=(string)$DB->query("SELECT content FROM tests WHERE title = ".$_GET["title"]." AND part = ".$_GET["part"]. "")->fetchArray()[0];
    $arr=explode("|",$result);
    for($i=0;$i<8;$i++){
        echo "<h4 style='margin-left: 5vh'>$arr[$i]</h4>";
    }
    echo "<div style='display: inline-block; margin-left: 5vh'>";
    for($i=0;$i<6;$i++){
        echo '<div style="display: inline-block"><a>Video '.($i+1).': </a><select id="'."selectItem".$i.'" style="margin-right: 2vh"><option value="">Choose...</option><option id="A">A</option><option id="B">B</option><option id="C">C</option><option id="D">D</option><option id="E">E</option><option id="F">F</option><option id="G">G</option><option id="H">H</option></select></div>';;
    }
    echo "</div>";
    echo "<div><button style='margin-left: 5vh; margin-top: 1.2vh' id='checkButton'>Check</button><div>";
}

function setBeautyTitle(){
    $DB = new SQLite3("db.sqlite");
    $part = (int)$_GET['part']+1;
    $title= (int)$_GET['title']+1;
    $partsRome = array("I", "II", "III", "IV", "V");
    $title=$DB->query("SELECT title FROM MENU WHERE id =".$title.";")->fetchArray()[0];
    echo "<title class='main-text-only-one' id=".(int)$_GET['title'].$_GET['part'].">".$title.": Part — ".$partsRome[$part-1]."</title>";
    echo "<h2 align='center' style='color: #1d2124' class='h1part' '>".$title.": Part - ".$partsRome[$part-1]."</h1>";
}
?>
<body>
<div class="content">
    <div class="header">
        <div class="Part">
            <?php
            setBeautyTitle();
            ?>
        </div>
        <div class="task" style="margin-left: 4vh">
            <?php
            $DB = new SQLite3("db.sqlite");
            $task=$DB->query("SELECT zadanie FROM tests WHERE title=".$_GET['title']." AND part=".$_GET['part']."")->fetchArray()[0];
            echo '<a class="task-text">'.$task.'</a>';
            echo<<<EOT
            <div align="center">
            <video id='my-video' class='video-js' controls preload='auto' width='640' height='264' data-setup='{}' style="margin-bottom: 1vh">
                <p class='vjs-no-js'>
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                </p>
            </video>
            </div>
        </div>
    </div>
EOT;
            echo '<script src="js/video-picker.js"></script>';
    if((int)$_GET['part']==0){
        createFor1stPart();
        echo '<script src="js/send-answer.js"></script>';
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
</body>
</html>