<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div><img src="images/logo_small.png" width="100" height="100"></div>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
<?php
$DB = new SQLite3("db.sqlite");
$result=$DB->query('SELECT title,image FROM menu');
$array = array();
$i = 1;
while($data = $result->fetchArray()){
    echo <<<EOT
    <div class="ramka">
    <div class="block displayed" style="background-image: url($data[1])">
        <h1 align="center">
            $data[0]
        </h1>
        <div class="content" align="center">
            <button class="in-row btn btn-secondary"  onclick="location.href = '/somePHP?subject=$i&part=1'">
                I
            </button>
            <button class="in-row btn btn-secondary " onclick="location.href = '/somePHP?subject=$i&part=2'">
                II
            </button>
            <button class="in-row btn btn-secondary"onclick="location.href = '/somePHP?subject=$i&part=3'">
                III
            </button>
            <button class="in-row btn btn-secondary"onclick="location.href = '/somePHP?subject=$i&part=4'">
                IV
            </button>
            <button class="in-row btn btn-secondary"onclick="location.href = '/somePHP?subject=$i&part=5'">
                VI
            </button>
        </div>
     </div>
    </div>
EOT;
    $i++;
}
?>
</body>
</html>