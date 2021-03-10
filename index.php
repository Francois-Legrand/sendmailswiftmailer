<?php
require_once('vendor/autoload.php');

$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 587))
  ->setUsername("d18c361bb0672d")
  ->setPassword("d92285927909a2");

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['john@doe.com' => 'John Doe'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Here is the message itself');

// Send the message
$result = $mailer->send($message);