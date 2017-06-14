<!-- Afslank toppers pagina -->
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
                <div class="section">
                </div>
                <br><br>
            </div>


            <!--Afslank Producten tonen-->

            <?php foreach (Product::afslank() as $product): ?>
                <div class="artikel">
                    <h5><?php e($product->naam); ?></h5>
                    <div class="productContainer">
                        <a class="productImage" href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                            <img src="<?php e($product->image); ?>"/>
                        </a>
                        <a class="productAdd" onclick="addToCart('<?php s($product) ?>')">ADD TO CART</a>


                    </div>
                    <h5 class="prijs"> € <?php e($product->prijs) ?></h5>

                    <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                    <br>
                    <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart</button>
                </div>
            <?php endforeach; ?>


            <br> <br>

            <!-- FOOTER -->

            <?php include 'templates/footer.php'; ?>

            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

    </body>
</html>

