<?php
namespace limily\wechat\template\tools;

class Tools
{

    public static function request_get($url,$params = [])
    {

        $url = "{$url}?" . http_build_query ( $params );
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
        curl_setopt ( $ch, CURLOPT_TIMEOUT, 60 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $params );
        $result = curl_exec ( $ch );
        curl_close ( $ch );

        return json_decode($result,true) ?? null;
    }

    public static function request_post($url,$params = [],$headers = [])
    {
        $ch = curl_init ();

        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $params );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_TIMEOUT, 60 );

        $result = curl_exec ( $ch );
        curl_close ( $ch );

        return json_decode($result,true) ?? null;
    }

    public static function result($status,$message)
    {
        return ['status'=>$status,'message'=>$message];
    }
}