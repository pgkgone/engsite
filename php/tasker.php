<?php
$DB = new SQLite3("db.sqlite");
echo "<div align='center'>";
$task=$DB->query("SELECT zadanie FROM tests WHERE title=".(int)$_GET['title']." AND part=".(int)$_GET['part']."")->fetchArray()[0];
echo $task;
echo "</div>"
?>