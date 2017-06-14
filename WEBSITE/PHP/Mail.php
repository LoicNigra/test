<!-- Een message en mail sturen -->

<?php
require 'include.php';

if (Form::isPost() == false) {
    header('Location: /Contact.php');
}

// het bericht
$msg = Form::post('message');
$email = Form::post('email');

// wordwrap voor als het meer dan 75 karakters bevat
$msg = wordwrap($msg, 75);

// send email
mail("Loic.nigra@student.ehb.be", "Contact bodybuilding.ehb", $msg, 'From: info@bodybuilding.ehb\r\n');
?>