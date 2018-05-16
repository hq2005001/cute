<?php

namespace App\controller;

class IndexController extends \Cute\Controller
{
    protected $middlewares = [
        'Test',
        'Test1',
    ];

    public function index()
    {
        $result = app()->model('Movie')->setData([[
            'account' => 'hq2005005',
            'email' => '305706356@qq.com',
            'password' => md5('123456'),
            'username' => 'hq2005001',
            'gender'=>'male',
            'status' => 1,
            'remember_token' => '',
            'belonging' =>1,
            'created_at' => time(),
            'updated_at' => time()
        ]])->addAll();
        return view('index/index.html', [
            'data' => $result
        ]);
    }

    public function demo()
    {
        return [app()->req->get('name')];
    }


    public function test()
    {
        $name = '111';
        return $name;
    }
}
