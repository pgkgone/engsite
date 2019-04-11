<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div><img src="images/logo_small.png" width="100" height="100"></div>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Visual Tests</title>
    <script>
        for(var i = 0; i < 5; i++)
        {
            $("#" + i + ".content").slideUp("slow");
        }
            $(document).ready(function () {

                $(".block").click(function () {
                    var idsel = this.id;
                    console.log(idsel);
                    $("#" + idsel + ".content").slideToggle("slow");
                });
            });
    </script>
</head>
<body>
<div>
<?php
$DB = new SQLite3("db.sqlite");
$result=$DB->query('SELECT title,image FROM menu');
$array = array();
$title = 0;
$partsRome = array("I", "II", "III", "IV", "V");
while($data = $result->fetchArray()){
echo <<<EOT
    <div class="ramka">
        <div class="block displayed" id="$title" style="background-image: url($data[1])">
            <h1 align="center">
                $data[0]
            </h1>
        </div>
        <div class="content" id="$title" align="center" style="display: none;">
EOT;
    for($part=0;$part<5;$part++){
echo <<<EOT
                <button class="in-row btn btn-secondary"  onclick="location.href = 'tests.php?title=$title&part=$part'">
                    $partsRome[$part]
                </button>
EOT;
    }
echo <<<EOT
            
        </div>
    </div>
EOT;
    $title++;
}
?>
</div>
</body>
</html>