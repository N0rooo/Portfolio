<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \Mailjet\Resources;

define('API_PUBLIC_KEY', '8f83f0a02e99afda524a2d05db2026eb');
define('API_PRIVATE_KEY', '7bc41ae92dd96dc25efdc59c57fccc57');

$mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY, true, ['version' => 'v3.1']);



if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST["message"]);


    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "thomas.aubert@edu.devinci.fr",
                    'Name' => "Thomas"
                ],
                'To' => [
                    [
                        'Email' => "thomas2002@outlook.fr",
                        'Name' => "Thomas"
                    ]
                ],
                'Subject' => "Information request portfolio",
                'TextPart' => "Message from " . $firstname . " " . $lastname . ", email : " . $email . ". Message : " . $message . "."
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success();
    header('Location: send_email.php');
    
} else {
    header('Location: index.php');
    die();
}
?>