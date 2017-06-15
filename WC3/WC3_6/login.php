<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location:geheim1.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="dologin.php" method="POST">
            <label for="username">Uw username:
                <input type="text" name="username"/>
            </label>
            <br>
            <label for="password">Uw wachtwoord:
                <input type="password" name="password"/>
            </label>
            <br>
            <div>
                <input type="hidden" name="postcheck" value="true"/>
                <input type="submit" value="Login">
            </div>
        </form>
    </body>
</html>
