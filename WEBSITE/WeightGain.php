<!-- Weight gain toppers -->
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

            </div>


            <div class="container">
                <div class="section">
                </div>
            </div>


            <!-- Weight gain Producten -->
            <?php foreach (Product::weight() as $product): ?>

                <div class="artikel">
                    <h5><?php e($product->naam); ?></h5>
                    <a href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                        <img src="<?php e($product->image); ?>"/>
                    </a>

                    <a class="productAdd" onclick="addToCart('<?php s($product) ?>')">ADD TO CART</a>


                    <p>€ <?php e($product->prijs) ?></p>
                    <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                    <br>
                    <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart</button>
                </div>

            <?php endforeach; ?>


            <!-- footer -->
            <?php include 'templates/footer.php'; ?>


            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

    </body>
</html>
