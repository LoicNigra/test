<?php
$landen = array("Be&lgië", "Roemenië", "Slowakije", "Denemarken", "Verenigd Koninkrijk", "Portugal", "Finland", "Nederland", "Frankrijk", "Kroatië", "Hongarije", "Ierland", "Italië", "Zweden", "Litouwen", "Bulgarije", "Luxemburg", "Malta", "Duitsland", "Oostenrijk", "Polen", "Griekenland", "Estland", "Letland", "Cyprus", "Spanje", "Tsjechië", "Slovenië");
sort($landen);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Totaal aantal landen</h1>
        <div><?php echo count($landen); ?></div>
        <h1>Gerangschikte lijst</h1>
        <table>
            <?php 
            foreach($landen as $volgnummer => $naam ){
                ?>
            <tr>
                <td>
                    <?php echo $volgnummer; ?>
                </td>
                <td>
                    <?php echo $naam; ?>
                </td>
            </tr>
              <?php  
            }
             ?>
        </table>
    </body>
</html>
