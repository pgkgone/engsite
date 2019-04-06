<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div><img src="images/logo_small.png" width="100" height="100"></div>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css" >
    <title>Visual Tests</title>
</head>
<body>
<?php
$DB = new SQLite3("db.sqlite");
$result=$DB->query('SELECT title,image FROM menu');
$array = array();
$title = 0;
$partsRome = array("I", "II", "III", "IV", "V");
while($data = $result->fetchArray()){
    echo <<<EOT
    <div class="ramka">
    <div class="block displayed" style="background-image: url($data[1])">
        <h1 align="center">
            $data[0]
        </h1>
        <div class="content" align="center">
EOT;
    for($part=0;$part<5;$part++){
        echo<<<EOT
            <button class="in-row btn btn-secondary"  onclick="location.href = '/tests.php?title=$title&part=$part'">
                $partsRome[$part]
            </button>
EOT;
}
    echo<<<EOT
        </div>
     </div>
    </div>
EOT;
    $title++;
}
?>
</body>
</html>