<?php
require '../PHP/include.php';

$producten = [];
if (Form::isPost()) {
    $naam = Form::post('naam');
    $producten = Product::search($naam);
}
?>

<div class="producten">
    <?php if (empty($producten)): ?>
        <h1>Er zijn geen producten gevonden!</h1>
    <?php else: ?>
        <?php
        foreach ($producten as $product): ?>
            <h1><?php e($product->naam); ?></h1>
            <img src="<?php e($product->image); ?>" />

            <h5>€ <?php e($product->prijs)?></h5>
        <?php endforeach; ?>
    <?php endif; ?>
</div>


