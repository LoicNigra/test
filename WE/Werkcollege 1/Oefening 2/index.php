<!DOCTYPE html>
<?php
define("PI", 3.1415);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        De oppervlakte van een cirkel met straal van 2,2m is 
        <?php echo berekenOppervlakteCirkel(2.2); ?>
        m2
    </body>
</html>
<?php
function berekenOppervlakteCirkel($straal) {
    return PI * $straal * $straal;
}
?>
