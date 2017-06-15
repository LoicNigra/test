<?php

if (isset($_POST["postcheck"])) {
 
} else {
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
            Weergave
        </h1>
        <div>
            Het geuploade bestand ziet er als volgt uit:
        </div>
        <div>
            <?php
            
            
            if ($_FILES["bestand"]["type"] == "image/jpeg" || $_FILES["bestand"]["type"] == "image/png"){
                $bestandsnaam = time();
                move_uploaded_file($_FILES["bestand"]["tmp_name"], "./uploads/" . $bestandsnaam);
                     
                ?>
            
            <img src="./uploads/<?php echo $bestandsnaam; ?>">
            <?php
            }else{?>
            <mark>
                Sorry, enkel jpeg of png files kunnen geupload worden.
            </mark>
            <?php
            
            }
            ?>
        </div>
        <div>
            <a href='index.php'>Ga terug naar de upload pagina</a>
        </div>
    </body>
</html>
