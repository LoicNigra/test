<?php
require 'PHP/include.php';
?>
<html lang="en">
    <head>
        <?php include 'templates/head.php'; ?>
    </head>
    <body>
        <?php include 'templates/menu.php'; ?>

        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Bodybuilding.ehb</h1>
                <div class="row center">
                    <h3>Hieronder vindt u een uitlichting van onze producten.</h3>

                    <!-- 4 Random producten -->

                    <?php foreach (Product::random() as $product): ?>
                        <div class="artikelIndex">
                            <h4><?php e($product->naam); ?></h4>
                            <a href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                                <img src="<?php e($product->image); ?>"/>
                            </a>
                            <h5>€ <?php e($product->prijs) ?></h5>
                            <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                            <br>
                            <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart
                            </button>
                        </div>
                    <?php endforeach; ?>


                    <br><br><br><br>

                    <h3>Hieronder vindt u een uitlichting van onze nieuwste producten.</h3>
                    <!-- 4 Nieuwste producten, op ID verkozen. Hoger ID = Nieuwer product -->
                    <?php foreach (Product::nieuwste() as $product): ?>
                        <div class="artikelIndex">
                            <h4><?php e($product->naam); ?></h4>
                            <a href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                                <img src="<?php e($product->image); ?>"/>
                            </a>

                            <h5>€ <?php e($product->prijs) ?></h5>
                            <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                            <br>
                            <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart
                            </button>
                        </div>
                    <?php endforeach; ?>

                </div>

                <br><br>

            </div>
        </div>


        <div class="container">
            <div class="section">
            </div>
        </div>

        <!--   FOOTER -->

        <?php include 'templates/footer.php'; ?>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>
