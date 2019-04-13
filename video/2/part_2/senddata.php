<?php
$score = 0;
$i=0;
if ((strtolower(trim($_POST['a1'])) == 'tumor cell death') || (strtolower(trim($_POST['a1'])) == 'tumour cell death')) {
    $score = $score + 1;
} else {
    $error[$i] = 7;
}
$i = $i + 1;
if (strtolower(trim($_POST['a2'])) == 'small crystals') {
    $score = $score + 1;
} else {
    $error[$i] = 8;
}
$i = $i + 1;
if (strtolower(trim($_POST['a3'])) == 'protective layer') {
    $score = $score + 1;
} else {
    $error[$i] = 9;
}
$i = $i + 1;
if (strtolower(trim($_POST['a4'])) == 'wait for activation') {
    $score = $score + 1;
} else {
    $error[$i] = 10;
}
$i = $i + 1;
if (strtolower(trim($_POST['a5'])) == 'healthy tissue\'s damage') {
    $score = $score + 1;
} else {
    $error[$i] = 11;
}
$i = $i + 1;
if (strtolower(trim($_POST['a6'])) == 'injection of nanoparticles') {
    $score = $score + 1;
} else {
    $error[$i] = 12;
}
$i = $i + 1;
if (strtolower(trim($_POST['a7'])) == 'nano x-ray therapy') {
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