<?php

namespace limily\wechat\template\interfaces;

interface WechatInterface
{
    public function send();

    //发送模板消息
    const TEMPLATE_MESSAGE_SEND   = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send';
}