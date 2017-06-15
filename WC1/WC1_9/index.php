<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $variabele1 = "test";
        $variabele2;
        $variabele3 = "0";
        $variabele4 = "test";
        $variabele5 = "test";
        if (isset($variabele1) == true) {
            echo "OK1";
        }
        if (isset($variabele2) == false) {
            echo "OK2";
        }
        if (empty($variabele3) == true) {
            echo "OK3";
        }
        if (empty($variabele4) == false) {
            echo "OK4";
        }
        if (isset($variabele5) == true && empty($variabele5)==false) {
            echo "OK5";
        }
        ?>
    </body>
</html>
