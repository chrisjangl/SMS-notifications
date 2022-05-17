<?php

function send_sms_notification( $recipient_number, $message ) {

    require_once DC_SMS_PATH . "/vendor/autoload.php";
    $API_key = 'fd1471a8';
    $API_secret = "NSvZQCcgQz8nlfGX";
    
    $basic  = new \Vonage\Client\Credentials\Basic( $API_key, $API_secret );
    $client = new \Vonage\Client($basic);
    
    $response = $client->sms()->send(
        new \Vonage\SMS\Message\SMS( $recipient_number, '18777204793', $message )
    );
    
    $message = $response->current();
    
    if ($message->getStatus() == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $message->getStatus() . "\n";
    }
}

function dc_send_activation_sms() {
    $message = "Hi, we just activated your plugin";

    // first parameter is phone number
    send_sms_notification( '', $message );

}
