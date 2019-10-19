<?php

namespace limily\wechat\template;


use limily\wechat\template\tools\Tools;

class TemplateMessage extends Message
{

    /**
     * 发送模板消息
     * @param $openId
     * @param $formId
     * @return array
     */
    public function send($openId,$formId)
    {
        // TODO: Implement send() method.
        try{
            $access_token = $this->getAccessToken();
            $params = [
                'touser'        => $openId,
                'template_id'   => $this->template_id,
                'page'          => $this->page,
                'form_id'       => $formId,
                'data'              => $this->template_data,
                'emphasis_keyword'  => $this->emphasis_keyword
            ];
            $result = Tools::request_post(parent::TEMPLATE_MESSAGE_SEND.'?access_token'.$access_token,array_filter($params));
            if(!$result || $result['errcode'] != 0) {
                throw new \Exception($result['errmsg']);
            }
            return Tools::result(true,'SUCCESS');
        }catch (\Exception $e) {
            return Tools::result(false,$e->getMessage());
        }
    }

}