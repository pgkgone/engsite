<?php
$score = 0;
$i=0;
if ($_POST['a1'] == 'B') {
    $score = $score + 1;
} else {
    $error[$i] = 14;
}
$i = $i + 1;
if ($_POST['a2'] == 'B') {
    $score = $score + 1;
} else {
    $error[$i] = 15;
}
$i = $i + 1;
if ($_POST['a3'] == 'A') {
    $score = $score + 1;
} else {
    $error[$i] = 16;
}
$i = $i + 1;
if ($_POST['a4'] == 'C') {
    $score = $score + 1;
} else {
    $error[$i] = 17;
}
$i = $i + 1;
if ($_POST['a5'] == 'C') {
    $score = $score + 1;
} else {
    $error[$i] = 18;
}
$i = $i + 1;
if ($_POST['a6'] == 'A') {
    $score = $score + 1;
} else {
    $error[$i] = 19;
}
$i = $i + 1;
if ($_POST['a7'] == 'B') {
    $score = $score + 1;
} else {
    $error[$i] = 20;
}
$data = array(
    'score' => $score,
    'errors' => $error,
);
echo json_encode($data);
//echo 'Your score is ' . $score . ' out of 7';
?>