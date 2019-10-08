<?php

namespace limily\wechat\template;

use Ixudra\Curl\Facades\Curl;

class TemplateMessage extends Message
{

    public function send()
    {
        // TODO: Implement send() method.
        $result = Curl::to('http://newyxpg.baoxiakuan369.com/api/seckill/detail/14')->get();
        return $result;
    }
}