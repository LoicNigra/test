<!-- Detail pagina, extra tab met details van het aangeklikte product -->
<?php require 'PHP/include.php';
$product = Form::get('product', false);
if ($product == false) {
    header('Location: /');
}

$product = Product::find($product);
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


            <!-- Details van het bepaalde product -->

            <h1><?php e($product->naam); ?></h1>

            <img class="imgDetail" src="<?php e($product->image); ?>"/>

            <h5><?php e($product->description) ?></h5>
            <h4>€ <?php e($product->prijs) ?></h4>

            <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
            <br>
            <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart</button>


        </div>

        <br><br>

        <!-- 4 Random producten van hetzelfde type -->

        <?php if ($product->type === 'afslank'): ?>
            <?php foreach (Product::randomAfslank($product->ID) as $product): ?>
                <div class="detailCategorie">
                    <p><?php e($product->naam); ?></p>
                    <a href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                        <img src="<?php e($product->image); ?>"/>
                    </a>
                    <h5>€ <?php e($product->prijs) ?></h5>
                    <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                    <br>
                    <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>


        <?php if ($product->type === 'weight'): ?>
            <?php foreach (Product::randomWeight($product->ID) as $product): ?>
                <div class="detailCategorie">
                    <p><?php e($product->naam); ?></p>
                    <a href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                        <img src="<?php e($product->image); ?>"/>
                    </a>
                    <h5>€ <?php e($product->prijs) ?></h5>
                    <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                    <br>
                    <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>


        <?php if ($product->type === 'creatine'): ?>
            <?php foreach (Product::randomCreatine($product->ID) as $product): ?>
                <div class="detailCategorie">
                    <p><?php e($product->naam); ?></p>
                    <a href="/Detail.php?product=<?php e($product->ID) ?>" target="_blank">
                        <img src="<?php e($product->image); ?>"/>
                    </a>
                    <h5>€ <?php e($product->prijs) ?></h5>
                    <button class="myButton" onclick="addToCart('<?php s($product) ?>')">add to cart</button>
                    <br>
                    <button class="myButton" onclick="removeFromCart('<?php s($product) ?>')">remove from cart</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>


        <!-- FOOTER -->

        <?php include 'templates/footer.php'; ?>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>

















