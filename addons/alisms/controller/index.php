<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

namespace addons\alisms\controller;


class index
{

    public function index()
    {
        $test = passthru("composer require alibabacloud/client");
        dump($test);
        echo __METHOD__;
    }
}