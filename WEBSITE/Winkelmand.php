<?php require 'PHP/include.php'; ?>

<?php
$expire = 365*24*3600;

ini_set('session.gc_maxlifetime', $expire);

session_start();

setcookie(session_name(),session_id(),time()+$expire);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'templates/head.php'; ?>
    </head>
    <body>
        <?php include 'templates/menu.php'; ?>


        <form method="post">
            <table class="">

                <thead>

                    <tr>
                        <th class="winkelform">Product</th>
                        <th class="winkelform">Hoeveelheid</th>
                        <th class="winkelform">Prijs per stuk</th>
                        <th class="winkelform">Prijs</th>
                        <th class="winkelform"> Totaalprijs</th>


                    </tr>
                </thead>
                <tbody id="overzicht" class="winkelform">
                    <template id="product-template">
                        <tr>

                            <th class="winkelform"></th>
                            <th class="winkelform" ></th>
                            <th class="winkelform" ></th>
                            <th class="winkelform"></th>
                            <th></th>


                    </template>

                </tbody>


            </table>

            <ul id="product-list">
            </ul>

                <a class="myButton" href="Factuuradres.php">Doorgaan</a>

        </form>





        <!--   Icon Section   -->
        <?php include 'templates/footer.php'; ?>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
            function compile() {
                var template = document.querySelector('#product-template');
                var producten = [];
                var cart = window.cart();
                for (var key in cart) {
                    if (cart.hasOwnProperty(key)) {
                        producten.push(cart[key]);
                    }
                }

                producten.forEach(function (item) {
                    template.content.querySelector('th:first-child').textContent = item.product.naam;
                    template.content.querySelector('th:nth-child(2)').textContent = item.amount;
                    template.content.querySelector('th:nth-child(3)').textContent = item.product.prijs;
                    template.content.querySelector('th:nth-child(4)').textContent = item.product.prijs + item.amount;
                    var entry = document.importNode(template.content, true);

                    document.querySelector('#product-list').appendChild(entry);
                });
            }

            $(document).ready(compile);
        </script>

    </body>
</html>

