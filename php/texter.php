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

function createFor1stPart(){
    echo "<div align='center'>";
    for($i=0;$i<6;$i++){
        echo '<div style="display: inline-block"><a>Video '.($i+1).': </a><select id="'."selectItem".$i.'" style="margin-right: 2vh;border-radius: 7px;"><option value="">Choose...</option><option id="A">A</option><option id="B">B</option><option id="C">C</option><option id="D">D</option><option id="E">E</option><option id="F">F</option><option id="G">G</option><option id="H">H</option></select></div>';;
    }
    echo "</div>";
    $DB = new SQLite3("db.sqlite");
    echo "<div>";
    $result=(string)$DB->query("SELECT content FROM tests WHERE title = ".$_GET["title"]." AND part = ".$_GET["part"]. "")->fetchArray()[0];
    echo $result;
    echo "</div>";
    echo '<script src="js/selector.js"></script>';
    echo '<script src="js/scroll.js"></script>';
}
function createFor2ndPart(){
    echo "<div class='text'>";
    echo '<div id="inputDiv">';
    $DB = new SQLite3("db.sqlite");
    $result = $DB->query("SELECT content FROM tests WHERE title = " . $_GET["title"] . " AND part = " . $_GET["part"] . "");
    $Processor = new ContentProcessor();
    $content = $result->fetchArray()[0];
    $Processor->InputProcessor($content);
    echo $content;
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
function createFor3rdPart(){
    echo '<div class="text">';
    $DB = new SQLite3("db.sqlite");
    $result=(string)$DB->query("SELECT content FROM tests WHERE title = ".$_GET["title"]." AND part = ".$_GET["part"]. "")->fetchArray()[0];
    $question=explode("||",$result); // || - разделение для вопросов | - разделение для ответов
    echo "<div style='display: inline-block; margin-left: 5vh'>";
    for($i=0;$i<7;$i++){
        echo "<form>";
        $arr = explode("|", $question[$i]);
        echo "<h6>$arr[0]</h6>";
        for($j=1;$j<4;$j++) {
            echo "<input type='radio' value='".($j - 1) ."' name='radioInput".$i."'>";
            echo "$arr[$j] </br>";
        }
        echo "</form>";
    }
    echo "</div>";
    echo "</div>";
}

$part=(int)$_GET['part'];
if($part==0){
    createFor1stPart();
}
else if($part==1){
    createFor2ndPart();
} else if($part==2){
    createFor3rdPart();
}
if(($part>=0) && ($part<=2)){
    echo "<div align='center'><button id='checkButton' class='btn-primary'>Check</button><div>";
    echo '<script src="js/send-answer.js"></script>';
}
echo '<script src="js/video-picker.js"></script>';
?>