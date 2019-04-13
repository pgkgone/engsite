<?php
function getScore($title,$part,$arr){
    $score=0;
    if($part==0){
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $title." AND part = ".$part."")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<6;$i++){
            if($ansArr[$i]==$arr[$i]) $score++;
        }
    }
    return $score;
}

echo getScore($_POST["title"],$_POST["part"],$_POST["arr"]);
?>