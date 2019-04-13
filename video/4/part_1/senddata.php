<?php
$score = 0;
if ($_POST['a1'] == 'F') {
    $score = $score + 1;
}
if ($_POST['a2'] == 'A') {
    $score = $score + 1;
}
if ($_POST['a3'] == 'C') {
    $score = $score + 1;
}
if ($_POST['a4'] == 'D') {
    $score = $score + 1;
}
if ($_POST['a5'] == 'B') {
    $score = $score + 1;
}
if ($_POST['a6'] == 'E') {
    $score = $score + 1;
}
echo 'Your score is ' . $score . ' out of 6';
?>