<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$programme = $_POST['programme'];
$message = htmlspecialchars($_POST['textarea']);

$msg = "First line of text\nSecond line of text";
$msg = wordwrap($msg, 70);
mail("akourtisdev@gmail.com", "My subject", $msg);