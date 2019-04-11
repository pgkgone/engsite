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
        var urls = ["https://www.youtube.com/embed/Z_62FhUI_Ew","https://www.youtube.com/embed/Z_62FhUI_Ew"];
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
function createButtonsList(){
    echo <<<EOT
     <div class="buttonList" align="center">
        <div class="menu-buttons">
EOT;
    $part = (int)$_GET['part'];
    $title= (int)$_GET['title'];
    if($part>0){
        $part=$part+1;
        $st="location.href = tests.php?title=".$title."&part=$part"."";
        echo '<input type="button" class="prev-button btn-primary" value="Prev part" onclick='. $st.'>';
    }
    echo  '<input type="button" class="main-menu-button btn-primary" value="Main menu" onclick="" />';
    if($part<5){
        $part=$part+1;
        $st="location.href = tests.php?title=".$title."&part=$part"."";
        echo '<input type="button" class="next-button btn-primary" value="Next part" onclick='. $st.'>';
    }
    echo <<<EOT
</div>
</div>
EOT;
}

function createFor1stPart(){
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
    echo "<title>".$title.": Part — ".$partsRome[$part]."</title>";
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
            <iframe width="560" height="315" src="" frameborder="0" id="myframe" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <input type="button" value="Сменить" onclick="changeURL(document.getElementById('myframe'))">
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
</body>
</html>