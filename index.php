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
            font: 4vh "Times New Roman";
            width: 15%;
        }
        .block{
            background-image: url(physics1.png);
            background-size: 100%;
            min-height: 17vh;
            width: 60%;
            margin-left: 20%;
        }

    </style>
</head>
<body>
<?php
$div_titles = array("History of Physics", "interdisciplinary physics", "History of Physics", "History of Physics", "History of Physics");
for ($i = 0; $i < 5; $i++) {
    echo <<<EOT
    <div class="ramka">
    <div class="block">
        <h1 align="center">
            $div_titles[$i]
        </h1>
        <div class="content" align="center">
            <button class="in-row btn btn-secondary" >
                I1
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