<?php
function getScore($title,$part,$arr){
    $score=0;
    if($part==0){
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $_POST["title"]." AND part = ".   $_POST["part"]. "")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<8;$i++){
            if((int)$ansArr[$i]==$arr[$i]) $score++;
        }
    }
    return $score;
}

echo getScore($_POST["title"],$_POST["part"],$_POST["arr"]);
?>