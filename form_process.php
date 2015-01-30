<?php

$first_name = $_POST('first_name');
$last_name = $_POST('lasst_name');
$email_name = $_POST('email');
$contact_us = $_POST('contact_us');
$to = 'richardrmwd@hotmail.com';
$subject = 'New Message';

mail ($to, $subject, $message, 'From: ' . $first_name . $last_name);
echo 'Your Message has been sent';


?>
