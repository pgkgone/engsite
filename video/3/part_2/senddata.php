<?php
$score = 0;
$i=0;
if (strtolower(trim($_POST['a1'])) == 'applied physics') {
    $score = $score + 1;
} else {
    $error[$i] = 7;
}
$i = $i + 1;
if ( (strtolower(trim($_POST['a2'])) == 'lasers, light, photonics') || (strtolower(trim($_POST['a2'])) == 'light, lasers, photonics') || (strtolower(trim($_POST['a2'])) == 'photonics, lasers, light') || (strtolower(trim($_POST['a2'])) == 'photonics, light, lasers') || (strtolower(trim($_POST['a2'])) == 'lasers, photonics, light') || 
    (strtolower(trim($_POST['a2'])) == 'lasers,light,photonics') || (strtolower(trim($_POST['a2'])) == 'light,lasers,photonics') || (strtolower(trim($_POST['a2'])) == 'photonics,lasers,light') || (strtolower(trim($_POST['a2'])) == 'photonics,light,lasers') || (strtolower(trim($_POST['a2'])) == 'lasers,photonics,light') ) {
    $score = $score + 1;
} else {
    $error[$i] = 8;
}
$i = $i + 1;
if (strtolower(trim($_POST['a3'])) == 'at a time') {
    $score = $score + 1;
} else {
    $error[$i] = 9;
}
$i = $i + 1;
if (strtolower(trim($_POST['a4'])) == 'optical trap') {
    $score = $score + 1;
} else {
    $error[$i] = 10;
}
$i = $i + 1;
if (strtolower(trim($_POST['a5'])) == 'individual proteins') {
    $score = $score + 1;
} else {
    $error[$i] = 11;
}
$i = $i + 1;
if (strtolower(trim($_POST['a6'])) == 'the genetic code') {
    $score = $score + 1;
} else {
    $error[$i] = 12;
}
$i = $i + 1;
if (strtolower(trim($_POST['a7'])) == 'of the physicist') {
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