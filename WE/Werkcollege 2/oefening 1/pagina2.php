<?php
if (isset($_GET["postcheck"])) {   
} 
else {
    header("Location: ./index.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
           Uw zoekterm is:
        </h1>
        <div>
            <?php
          
            echo $_GET["zoekterm"];
            ?>
        </div>
    </body>
</html>
