<?php
session_start();
include_once("data/Instellingen.php");

//Default instellingen
$achtergrondkleur = "#FFFFFF";
$naam = "bezoeker";
$taal = "nl";
$tijdszone = 0;
if (isset($_SESSION["instellingen"])) {
    $mijnInstellingen = unserialize($_SESSION["instellingen"]);
    $achtergrondkleur = $mijnInstellingen->achtergrondkleur;
    $naam = $mijnInstellingen->bezoekersnaam;
    $taal = $mijnInstellingen->taalkeuze;
    $tijdszone = $mijnInstellingen->tijdszone;
}
//Extra instellingen voor talen
include "talen/" . $taal . ".php";

//Extra instellingen voor tijdszone
$tijdzoneOffsetInSeconden = date("Z");
$utcTijd = time() - $tijdzoneOffsetInSeconden;
$gecorrigeerdeTijd = $utcTijd + ($tijdszone * 3600);
$tijd = date("H:i", $gecorrigeerdeTijd);
