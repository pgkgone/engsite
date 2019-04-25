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
    echo '<input type="button" class="prev-button btn-primary" value="Prev part" onclick="location.href = '.returnHref($title,$part-1).'">';
}
echo '<input type="button" class="main-menu-button btn-primary" value="Main menu" onclick="location.href = \'index.php\'" />';
    if($part<4){
        echo '<input type="button" class="next-button btn-primary" value="Next part" onclick="location.href = '.returnHref($title,$part+1).'">';
    }
    echo <<<EOT
</div>
</div>
EOT;
?>