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
    if($part==1){
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $title." AND part = ".$part."")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<7;$i++){
            if(strtoupper($ansArr[$i])==strtoupper($arr[$i])) $score++;
            if($title==3 && $part==1){
                $v1="LASERS";
                $v2="LIGHT";
                $v3="PHOTONICS";
                if($v1==strtoupper ($arr[$i])) $score++;
                if($v2==strtoupper ($arr[$i])) $score++;
                if($v3==strtoupper ($arr[$i])) $score++;
            }
        }
    }
    if($part==2){
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $title." AND part = ".$part."")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<7;$i++){
            if($ansArr[$i]==$arr[$i]) $score++;
        }
    }
    return $score;
}

echo getScore($_POST["title"],$_POST["part"],$_POST["arr"]);
?>