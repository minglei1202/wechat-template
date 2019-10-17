<?php

namespace limily\wechat\template;

use limily\wechat\template\interfaces\WechatInterface;

abstract class Message implements WechatInterface
{
    /**
     * 配置
     * @var array
     */
    protected $config = [];
    /**
     * 模板id
     * @var null
     */
    protected $template_id = null;

    public function __construct($config = [])
    {
        $this->config = $config;
    }


    protected function request_get($url,$params = [])
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

    protected function request_post($url,$params = [],$headers = [])
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
}