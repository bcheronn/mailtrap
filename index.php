<?php
/* Using Swift Mailer
// Load the required vendor libraries
require_once 'vendor/autoload.php';

// Create the Transport
if ($_SERVER['SERVER_NAME'] == 'mailtrap') {
    // Local SMTP mailtrap
    $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 465))
        ->setUsername('772fbdfbf02416')
        ->setPassword('a22403c46020d8');
} else {
    // Production SMTP client
    $transport = new Swift_SendmailTransport();
}

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Mailtrap test'))
    ->setFrom(['bertrand@cheronnet.com' => 'Bertrand C'])
    ->setTo(['demo@demo.fr', 'demo@demo.org' => 'Demo dot Org'])
    ->setBody('Salut les gens !');

// Send the message
$result = $mailer->send($message);

var_dump($result);
*/

// Wamp version
$mail = mail('bertrand@cheronnet.com', 'Salut', 'Salut les gens !', 'From: webmaster@cheronnet.com');

if ($mail) {
    echo 'Merci :D';
} else {
    echo 'Erreur :(';
}
