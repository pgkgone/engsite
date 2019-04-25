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
    $DB = new SQLite3("db.sqlite");
    $result=(string)$DB->query("SELECT content FROM tests WHERE title = ".$_GET["title"]." AND part = ".$_GET["part"]. "")->fetchArray()[0];
    echo $result;
    echo "<div>";
    for($i=0;$i<6;$i++){
        echo '<div style="display: inline-block"><div><a id="options-a">Video '.($i+1).': </a></div><div class="select_mate" data-mate-select="active" ><select name="" onchange="" onclick="return false;" id=""><option value="" >Select...</option><option value="A">A</option><option value="B" >B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="H">H</option> </select><p class="selecionado_opcion" onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"> <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/> <path d="M0-.75h24v24H0z" fill="none"/></svg></span><div class="cont_list_select_mate"> <ul class="cont_select_int"> </ul> </div> </div></div>';
    }
    echo "</div>";
    echo '<script src="js/selector.js"></script>';
}
function createFor2ndPart(){
    $DB = new SQLite3("db.sqlite");
    $result = $DB->query("SELECT content FROM tests WHERE title = " . $_GET["title"] . " AND part = " . $_GET["part"] . "");
    $Processor = new ContentProcessor();
    $content = $result->fetchArray()[0];
    $Processor->InputProcessor($content);
    echo $content;
    echo '</div>';
}
function createFor3rdPart(){
    echo '<div align="center"></div>';
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
    echo "<div><button id='checkButton'>Check</button><div>";
    echo '<script src="js/send-answer.js"></script>';
}
?>