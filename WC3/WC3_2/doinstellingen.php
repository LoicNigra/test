<?php
if (isset($_POST["postcheck"])) {
    $taalinstelling = $_POST["taal"];
    setcookie("taal", $taalinstelling);
}
header("location:instellingen.php");
?>