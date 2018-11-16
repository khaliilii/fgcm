<?php
/**
 * Created by PhpStorm.
 * User: mohsen
 * Date: 11/14/18
 * Time: 4:45 PM
 */

namespace Khaliilii\Fgcm\Facade;


class Fgcm
{
    public function __construct()
    {

    }

    public function sendPushNotification($token,$title,$message)
    {
        define( 'API_ACCESS_KEY', env('FCM_SERVER_KEY' ));
        $fcm_token = $token;
        $url = 'https://fcm.googleapis.com/fcm/send';
        $data = array(
            'body'   => $message,
            'title'  => $title
        );
        $fields = array(
            'to'    => $fcm_token,
            'notification'  => $data
        );
        $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, $url );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        if ($result === FALSE) {
            die('Oops! FCM Send Error: ' . curl_error($ch));
        }

        return $result;
    }
}