<?php

trait Notifiable 
{
    public function notify($message)
    {
        echo $message;

    }
}

class SMS
{
 use Notifiable;
}

class Email 
{
 use Notifiable;
}

class PushNotification
{
 use Notifiable;
}

$sms = new SMS();
$sms->notify("We are here to give you the best service ever dail *123*1#");
echo '<br>';
$email = new Email();
$email->notify( ' We are here for you');
echo '<br>';
$push = new PushNotification();
$push->notify( ' We are at your services');


?>