<?php
$score = 0;
$i=0;
if (strtolower(trim($_POST['a1'])) == 'medical imaging') {
    $score = $score + 1;
} else {
    $error[$i] = 7;
}
$i = $i + 1;
if (strtolower(trim($_POST['a2'])) == 'person\'s stay') {
    $score = $score + 1;
} else {
    $error[$i] = 8;
}
$i = $i + 1;
if (strtolower(trim($_POST['a3'])) == 'kinds of sensing') {
    $score = $score + 1;
} else {
    $error[$i] = 9;
}
$i = $i + 1;
if (strtolower(trim($_POST['a4'])) == 'ultrasound') {
    $score = $score + 1;
} else {
    $error[$i] = 10;
}
$i = $i + 1;
if (strtolower(trim($_POST['a5'])) == 'causes no damage') {
    $score = $score + 1;
} else {
    $error[$i] = 11;
}
$i = $i + 1;
if (strtolower(trim($_POST['a6'])) == 'electrical energy') {
    $score = $score + 1;
} else {
    $error[$i] = 12;
}
$i = $i + 1;
if (strtolower(trim($_POST['a7'])) == 'quartz crystal') {
    $score = $score + 1;
} else {
    $error[$i] = 13;
}
$data = array(
    'score' => $score,
    'errors' => $error,
);
echo json_encode($data);
//echo 'Your score is ' . $score . ' out of 7';
?>