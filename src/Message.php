<?php

namespace Limily;

use Limily\interfaces\WechatInterface;

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


}