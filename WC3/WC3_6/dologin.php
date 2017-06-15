<?php

if (isset($_POST["postcheck"])) {
    if ($_POST["username"] == "webontwikkelaar" && $_POST["password"] == "ehb") {
        session_start();
        $_SESSION["user"] = "webontwikkelaar";
        header("location:geheim1.php");
    }
} else {
    header("Location:login.php");
}
?>
