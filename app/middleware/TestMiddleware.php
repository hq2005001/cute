<?php
namespace app\middleware;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestMiddleware
 *
 * @author anoah
 */
class TestMiddleware extends \Cute\Middleware
{
    public function handle($request, &$result)
    {
//        $result = false;
//        app('res')->redirect('http://www.baidu.com');
        $_GET['middle_name'] = app('req')->get('name').'牛得一匹';
    }
}
