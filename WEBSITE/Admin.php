<!-- pagina voor admin -->

<?php require 'PHP/include.php'; ?>

<?php if (Authenticatie::user() && Authenticatie::user()->admin): ?>

     <!DOCTYPE html>
     <html lang="en">
         <head>
             <?php include 'templates/head.php'; ?>
         </head>
         <body>
             <?php include 'templates/menu.php'; ?>
             <div class="section no-pad-bot" id="index-banner">
                 <div class="container">
                     <div class="section">
                     </div>
                     <br><br>
                 </div>


                 <!-- FOOTER -->

                 <?php include 'templates/footer.php'; ?>

                 <!--  Scripts-->
                 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                 <script src="js/materialize.js"></script>
                 <script src="js/init.js"></script>

         </body>
     </html>


    <form method="POST">
        <button type="submit">
            Show Alle gemaakte bestellingen
        </button>
    </form>
<?php endif; ?>










<!-- Geen admin = naar homepagina-->
<?php if (Authenticatie::user() && Authenticatie::user() != admin): ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'templates/head.php'; ?>
    </head>
    <body>
        <?php include 'templates/menu.php'; ?>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <div class="section">
                </div>
                <br><br>
            </div>


<h1> U bent ingelogd</h1>
            <button class="myButton"><a href="index.php"> Ga naar Homepagina</a> </button>









            <!-- FOOTER -->

            <?php include 'templates/footer.php'; ?>

            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

    </body>
</html>

<?php endif; ?>