<!DOCTYPE html>

<?php

// If you are not using Composer (recommended)
require("/lib/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "kahzheng@hotmail.com");
$to = new SendGrid\Email(null, "charissa930520@hotmail.com");
$subject = "KahZheng, help me make SendGrid!";
$content = new SendGrid\Content("text/plain", "Dear Kah Zheng, can you please setup an SendGrid Account for me?");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
?>

