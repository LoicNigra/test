<?php

$expire = 365*24*3600;

ini_set('session.gc_maxlifetime', $expire);

session_start();

setcookie(session_name(),session_id(),time()+$expire);

?>

<!DOCTYPE html>
<html lang="en">

    <?php
    require 'PHP/include.php';
    if (Form::isPost()) {
        if (is_null(Form::post('login'))) {
            dd('ongeldige login!');
        }
    }
    ?>


    <head>
        <?php include 'templates/head.php'; ?>
    </head>
    <body>
        <?php include 'templates/menu.php'; ?>
        <div class="login">
            <br><br>
            <div class="login-screen">
                <div class="app-title">
                    <h1>Login</h1>
                </div>

                <!-- Login forum + POST van Database -->

                <form method="POST" action="">
                    <div class="login-form">
                        <div class="control-group">
                            <input type="text" class="login-field" value="" placeholder="username" id="login-name"
                                   name="login">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="control-group">
                            <input type="password" class="login-field" value="" placeholder="password" id="login-pass"
                                   name="password">
                         <label class="login-field-icon fui-lock" for="login-pass"></label>
                            <br>

                        </div>
                        <label for="login-checkbox">
                            <input type="checkbox" id="login-checkbox" value="onthouden">
                            Onthoud mijn gegevens
                        </label>
                        <a class="btn btn-primary btn-large btn-block" href='Admin.php' type="submit">login</a>

                </form>

                <!-- Link naar het registreren van een klant, een nieuwe klant aanmaken -->
                <a class="login-link" href="Registreren.php"> Geen account? Registreren</a>
            </div>
        </div>



        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <?php include 'templates/footer.php'; ?>


                <!--  Scripts-->
                <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="js/materialize.js"></script>
                <script src="js/init.js"></script>


    </body>
</html>
