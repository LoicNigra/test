<?php
if (isset($_POST["postcheck"])) {
    $naaminstelling = $_POST["naam"];
    setcookie("naam", $naaminstelling);
    $achtergrondkleurinstelling = $_POST["achtergrondkleur"];
    setcookie("achtergrondkleur", $achtergrondkleurinstelling, time() + 3600 * 24 * 7);
    $taalinstelling = $_POST["taal"];
    setcookie("taal", $taalinstelling);
    $tijdszoneinstelling = $_POST["tijdszone"];
    setcookie("tijdszone", $tijdszoneinstelling, mktime(23, 59, 0, 12, 31, 2014));
}
header("location:instellingen.php");
?>