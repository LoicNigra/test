<?php require 'PHP/include.php';

// Controle of alles is ingevuld
if (Form::isPost()) {
    if (Form::post('voornaam', false) == false) {
        redirect('Registreren.php?error=Voornaam is niet ingevuld');
    } elseif (Form::post('achternaam', false) == false) {
        redirect('Registreren.php?error=Achternaam is niet ingevuld');
    } elseif (Form::post('email', false) == false) {
        redirect('Registreren.php?error=email is niet ingevuld');
    } elseif (Form::post('login', false) == false) {
        redirect('Registreren.php?error=Username is niet ingevuld');
    } elseif (Form::post('password', false) == false) {
        redirect('Registreren.php?error=Wachtwoord is niet ingevuld');
    } elseif (Form::post('postcode', false) == false) {
        redirect('Registreren.php?error=Postcode is niet ingevuld');
    } elseif (Form::post('stad', false) == false) {
        redirect('Registreren.php?error=Stad is niet ingevuld');
    } elseif (Form::post('adres', false) == false) {
        redirect('Registreren.php?error=Straatnaam is niet ingevuld');
    } elseif (Form::post('huisnummer', false) == false) {
        redirect('Registreren.php?error=Huisnummer is niet ingevuld');
    }
    $voornaam = Form::post('voornaam');
    $achternaam = Form::post('achternaam');
    $email = Form::post('email');
    $login = Form::post('login');
    $password = Form::post('password');
    $postcode = Form::post('postcode');
    $stad = Form::post('stad');
    $adres = Form::post('adres');
    $huisnummer = Form::post('huisnummer');

    // Registreren, aanmaken van een nieuwe login
    Authenticatie::register($voornaam, $achternaam, $email, $postcode, $stad, $adres, $huisnummer, $login, $password);
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'templates/head.php'; ?>
    </head>
    <body>
        <?php include 'templates/menu.php'; ?>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
            </div>
        </div>
        <!-- Forum -->

        <form id="contact_form" action="Registreren.php" method="POST">

            <div class="row">
                <label for="voornaam">Voornaam</label><br/>
                <input id="voornaam" class="input" name="voornaam" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="achternaam">Achternaam</label><br/>
                <input id="achternaam" class="input" name="achternaam" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="email">email</label><br/>
                <input id="email" class="input" name="email" type="email" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="login">Postcode</label><br/>
                <input id="postcode" class="input" name="postcode" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="login">Stad</label><br/>
                <input id="stad" class="input" name="stad" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="login">Adres</label><br/>
                <input id="adres" class="input" name="adres" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="login">Huisnummer</label><br/>
                <input id="huisnummer" class="input" name="huisnummer" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="login">Username</label><br/>
                <input id="login" class="input" name="login" type="text" size="30" required/><br/>
            </div>

            <div class="row">
                <label for="password">Password</label><br/>
                <input id="password" class="input" name="password" type="password" size="30" required/><br/>
            </div>


            <input id="submit" type="submit" value="AccountMaken"/>
        </form>


        <!-- FOOTER -->

        <?php include 'templates/footer.php'; ?>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

        <!-- Zet de error in de link om naar een error alert -->
        <script>
            function getQueryParams(qs) {
                qs = qs.split('+').join(' ');

                var params = {},
                    tokens,
                    re = /[?&]?([^=]+)=([^&]*)/g;

                while (tokens = re.exec(qs)) {
                    params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
                }

                return params;
            }

            var error = getQueryParams(document.location.search).error;
            if (error !== undefined) {
                alert(error)
            }
        </script>

    </body>
</html>

