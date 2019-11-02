<?php

require_once '../vendor/autoload.php';

$tpl = new \limily\wechat\template\TemplateMessage(['app_id'=>'wx547263eca348b9e4','app_secret'=>'gsr6hred9yhf3hqdvbj5keygj6edg2hu']);
$tpl->setTemplateId('rSM8lhQ3_bK86xoCnGUB-ErKdXgb3_FVmHR08aJRwBU');
$tpl->setData([
    "12312312",
    "店铺名称",
    "2019-08-08",
]);
var_dump($tpl->send('oqHeB4qLsAvAtXbXnLAnGjOtY8IQ','123123'));