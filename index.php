<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div><img src="images/logo_small.png" width="100" height="100"></div>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <style type="text/css">
        .ramka{
            background: #eeeee5;
            font: 8pt Tahoma;
            color: #2c2c2c;
        }
        .in-row{
            display: inline-block;
            font: 5vh "Times New Roman";
            width: 15%;
        }
        .block{
            margin-bottom: 2px;
            border-radius: 17px; /* Уголки */
            background-size: 100%;
            min-height: 16vh;
            width: 60%;
            margin-left: 20%;
        }

    </style>
</head>
<body>
<?php
$DB = new SQLite3("db.sqlite");
$result=$DB->query('SELECT title,image FROM menu');
$array = array();
while($data = $result->fetchArray()){
    echo <<<EOT
    <div class="ramka">
    <div class="block displayed" style="background-image: url($data[1])">
        <h1 align="center">
            $data[0]
        </h1>
        <div class="content" align="center">
            <button class="in-row btn btn-secondary" >
                I
            </button>
            <button class="in-row btn btn-secondary">
                II
            </button>
            <button class="in-row btn btn-secondary">
                III
            </button>
            <button class="in-row btn btn-secondary">
                IV
            </button>
            <button class="in-row btn btn-secondary">
                V1
            </button>
        </div>
     </div>
    </div>
EOT;
}
?>
</body>
</html>