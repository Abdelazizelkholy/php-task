<?php

namespace App\Http\Traits;

use http\Client;

trait SMS
{


    public function sendMessage($phone, $code)
    {
        try {

            $account_sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
            $auth_token = 'your_auth_token';

            $twilio_number = $phone;

            $client = new Client($account_sid, $auth_token);
            $client->messages->create(
            // Where to send a text message (your cell phone?)
                '+15558675310',
                array(
                    'from' => $twilio_number,
                    'body' => 'Your verification code is : '.$code
                )
            );


        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
