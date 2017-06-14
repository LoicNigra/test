<?php require 'PHP/include.php'; ?>
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


                <!-- Forum -->

                <form id="contact_form" action="PHP/Mail.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <label for="name">Voornaam en Achternaam</label><br/>
                        <input id="name" class="input" name="name" type="text" value="" size="30"/><br/>
                    </div>
                    <div class="row">
                        <label for="email">Email:</label><br/>
                        <input id="email" class="input" name="email" type="text" value="" size="30"/><br/>
                    </div>
                    <div class="row">
                        <label for="message">Bericht:</label><br/>
                        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br/>
                    </div>
                    <input class="myButton" id="submit_button" type="submit" value="Send email"/>
                </form>


                <!-- FOOTER -->

                <?php include 'templates/footer.php'; ?>

                <!--  Scripts-->
                <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="js/materialize.js"></script>
                <script src="js/init.js"></script>

    </body>
</html>

