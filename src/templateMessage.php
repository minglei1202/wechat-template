<?php

namespace limily\wechat\template;


class TemplateMessage extends Message
{

    public function send()
    {
        // TODO: Implement send() method.
        $result = $this->request_get('http://newyxpg.baoxiakuan369.com/api/seckill/detail/14');
        return $result;
    }
}