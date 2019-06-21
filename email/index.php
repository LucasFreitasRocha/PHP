<?php
//  biblioteca Swiftmailer, acessível em: https://swiftmailer.symfony.com/docs/introduction.html
require('vendor/autoload.php');
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('Seu email ')
    ->setPassword('sua senha ');
// Create the Mailer using created Transport
$mailer = new Swift_Mailer($transport);
// Create a message
$message = (new Swift_Message('Assunto do email '))
    ->setFrom(['seu email' => 'seu nome'])
    ->setTo([
        'email para quem você quer enviar ' => 'Nome da pessoa',
        'outro email' => 'nome da outra pessoa'
    ])
    ->setBody('corpo do email ');
    // anexar algum arquivo ao email
    $message->attach(Swift_Attachment::fromPath('/path/to/image.jpg'));
 // Send the message
$result = $mailer->send($message);
?>