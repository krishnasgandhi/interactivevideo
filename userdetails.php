<?php

error_reporting(0);

$html = '';
$toEmail = $_POST['email'];
$fromEmail = 'krishu.sheth89@gmail.com';
$from_name = $_POST['name'];
$mailSubject = 'Interctive video';

$industry = $_POST['industry'];
$services = implode(',', $_POST['services']);
$budget = $_POST['budget'];
$urgent = $_POST['urgent'];
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone'];
$message = $_POST['message'];
$date = date('Y-m-d H:i:s');

//database connections
mysql_connect('localhost', 'demo33bl_video', 'S;vT9C,A~k)3k,+VO+');
mysql_select_db('demo33bl_video');

//insert into db
mysql_query("INSERT INTO interactive_users (Industry, Services, Budget, Urgent, Name, PhoneNumber, Email, Message, DateCreated) VALUES "
                . "('$industry', '$services', '$budget', '$urgent', '$name', '$email', '$phoneNumber', '$message' ,'$date')")
        or print_r(mysql_error());

//html
$html .= include 'mailer.php';

$encoding = "utf-8";

// Mail header
$header = "Content-type: text/html; charset=" . $encoding . " \r\n";
$header .= "From: BlinkInteract \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Transfer-Encoding: 8bit \r\n";
$header .= "Bcc: $fromEmail\r\n";
$header .= "Date: " . date("r (T)") . " \r\n";

// Send mail
mail($toEmail, $mailSubject, $html, $header);
echo 'true';
exit;
?>