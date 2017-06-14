<?php
require 'PHP/include.php';
?>

<?php require 'PHP/include.php';
// Controle of alles is ingevuld
if (Form::isPost()) {
    if (Form::post('postcode_Factuur', false) == false) {
        redirect('Registreren.php?error=Postcode is niet ingevuld');
    } elseif (Form::post('stad_Factuur', false) == false) {
        redirect('Registreren.php?error=Stad is niet ingevuld');
    } elseif (Form::post('adres_Factuur', false) == false) {
        redirect('Registreren.php?error=straatnaam is niet ingevuld');
    } elseif (Form::post('huisnummer_Factuur', false) == false) {
        redirect('Registreren.php?error=Huisnummer is niet ingevuld');
    } elseif (Form::post('postcode_Lever', false) == false) {
        redirect('Registreren.php?error=postcode is niet ingevuld');
    } elseif (Form::post('stad_Lever', false) == false) {
        redirect('Registreren.php?error=Stad is niet ingevuld');
    } elseif (Form::post('adres_Lever', false) == false) {
        redirect('Registreren.php?error=straatnaam is niet ingevuld');
    } elseif (Form::post('huisnummer_Lever', false) == false) {
        redirect('Registreren.php?error=Huisnummer is niet ingevuld');
    }

    $postcode_Factuur = Form::post('postcode_Factuur');
    $stad_Factuur = Form::post('stad_Factuur');
    $adres_Factuur = Form::post('adres_Factuur');
    $huisnummer_Factuur = Form::post('huisnummer_Factuur');
    $postcode_Lever = Form::post('postcode_Lever');
    $stad_Lever = Form::post('stad_Lever');
    $adres_Lever = Form::post('adres_Lever');
    $huisnummer_Lever = Form::post('huisnummer_Lever');
    $betaalmethode = Form::post('betaalmethode');


// Registreren, aanmaken van een nieuwe login
    Bestelling::registerBestelling($postcode_Factuur, $stad_Factuur, $adres_Factuur, $huisnummer_Factuur, $postcode_Lever, $stad_Lever, $adres_Lever, $huisnummer_Lever, $betaalmethode);
}

?>


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
            </div>
        </div>

        <div class="overzicht">

            <table class="winkelmand">
                <thead>
                    <tr>
                        <th>Winkelwagen</th>
                        <th>Factuuradres</th>
                        <th>Leveradres</th>
                        <th></th>
                        <th>Totaalprijs</th>

                    </tr>
                </thead>


            </table>


        </div>
        <form action="PHP/classes/Bestelling.php" method="POST">
            <?php foreach ($_POST as $name => $value): ?>
                <input type="hidden" name="<?= $name ?>" value="<?= $value ?>"/>
            <?php endforeach; ?>
            <input type="hidden" name="producten" id="producten"/>
            <button type="submit">Bestel</button>
        </form>


        <br><br><br>





        <?php

        foreach (Bestelling::showBestellingen() as $bestellingen): ?>
            <div class="artikel">
                <h5><?php e($bestellingen->ID); ?></h5>
                <div class="productContainer">

                    <p> <?php e($bestellingen->postcode_Factuur); ?> />
                    <p> <?php e($bestellingen->stad_Factuur); ?> />
                    <p><?php e($bestellingen->adres_Factuur); ?> />
                    <p><?php e($bestellingen->huisnummer_Factuur); ?> />
                    <p> <?php e($bestellingen->postcode_Lever); ?> />
                    <p> <?php e($bestellingen->stad_Lever); ?> />
                    <p> <?php e($bestellingen->adres_Lever); ?> />
                    <p> <?php e($bestellingen->huisnummer_Lever); ?> />
                    <p> <?php e($bestellingen->betaalmethode); ?> />
                </div>
            </div>

        <?php endforeach; ?>


        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <?php include 'templates/footer.php'; ?>
                <!--  Scripts-->
                <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="js/materialize.js"></script>
                <script src="js/init.js"></script>
                <script>
                    $(document).ready(function () {
                        var cart = window.cart();

                        $('#producten').val(JSON.stringify(cart));
                    });
                </script>
    </body>
</html>
