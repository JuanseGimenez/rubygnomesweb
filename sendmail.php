<?php
// the message
$msg = $_POST['message'];
$from = $_POST['email'];
$name = $_POST['name'];

$txt = "From: " . $name . " email: " . $from . "\n" ."meessage: " . $msg;

// send email
mail("l@rubygnomes.com","Ruby Gnomes contact",$txt, "From: rubygnomes@rubygnomes.com");
mail("j@rubygnomes.com","Ruby Gnomes contact",$txt, "From: rubygnomes@rubygnomes.com");
header("Location: http://rubygnomes.com/contact.php");
?>

