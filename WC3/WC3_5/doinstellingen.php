<?php

include_once "data/Instellingen.php";
if (isset($_POST["postcheck"])) {
    session_start();
    $naaminstelling = $_POST["naam"];
    $achtergrondkleurinstelling = $_POST["achtergrondkleur"];
    $taalinstelling = $_POST["taal"];
    $tijdszoneinstelling = $_POST["tijdszone"];
    $mijnInstellingen = new Instellingen($taalinstelling, $naaminstelling, $achtergrondkleurinstelling, $tijdszoneinstelling);
    $_SESSION["instellingen"] = serialize($mijnInstellingen);
}
header("location:instellingen.php");
?>