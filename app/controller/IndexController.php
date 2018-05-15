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
        $result = app()->model('Movie')->setData([
            'account' => 'hq2005002',
            'email' => '305706353@qq.com',
            'password' => md5('123456'),
            'username' => 'hq2005001',
            'gender'=>'male',
            'status' => 1,
            'remember_token' => '',
            'belonging' =>1,
            'created_at' => time(),
            'updated_at' => time()
        ])->addOne();
        dd($result);
        return view('index/index.html', [
            'data' => $name
        ]);
    }

    public function demo()
    {
        return [app()->req->get('name')];
    }
}
