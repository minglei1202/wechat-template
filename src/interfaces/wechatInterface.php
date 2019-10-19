<?php

namespace limily\wechat\template\interfaces;

interface WechatInterface
{
    public function send($openId,$formId);

    public function getAccessToken();

    //发送模板消息
    const TEMPLATE_MESSAGE_SEND = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send';
    //获取小程序全局唯一后台接口调用凭据
    const ACCESS_TOKEN          = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send';
}