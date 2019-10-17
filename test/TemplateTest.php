<?php

require_once '../vendor/autoload.php';

$tpl = new \limily\wechat\template\TemplateMessage();
var_dump($tpl->send());