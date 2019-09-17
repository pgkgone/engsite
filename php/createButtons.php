<?php
function returnHref($a,$b){
    return "'"."tests.php?title=".$a."&part=".$b."'";
}
echo <<<EOT
    <div class="buttonList" align="center">
    <div class="menu-buttons">
EOT;
$part = (int)$_GET['part'];
$title= (int)$_GET['title'];
if($part>0){
    echo '<input type="button" class="waves-effect waves-light btn" value="Prev part" onclick="location.href = '.returnHref($title,$part-1).'">';
}
echo '<input type="button" class="waves-effect waves-light btn" value="Main menu" onclick="location.href = \'index.html\'" style="margin-left:6px;margin-right: 6px" />';
    if($part<4){
        echo '<input type="button" class="waves-effect waves-light btn" value="Next part" onclick="location.href = '.returnHref($title,$part+1).'">';
    }
    echo <<<EOT
</div>
</div>
EOT;
?>