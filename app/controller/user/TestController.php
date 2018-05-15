<?php

namespace app\controller\user;

class TestController extends \Cute\Controller
{

    public function index()
    {
        // $rs = app()->db()->table('user')->data([
        //     'name' => 'hq'
        // ])->insert();
        $rs = app()->model('Test')->where(['name'=>'hq'])->getOne();
        return $this->apiData($rs);
    }

    public function test1()
    {
        app()->model('Test')->setData([
            [
                'name' => 'test1',
                'age' => '123',
            ],[
                'name' => 'test2',
                'age' => 'abc'
            ],
        ])->isValid(true);
        $rs = app()->model('Test')->addAll();
        return $rs;
    }

    public function test2()
    {
        $rs = app()->model('Test')->where(['_id'=>'5aead4019a892041580b7521'])->field(['_id'])->getOne();
        return $this->apiData($rs);
    }

    public function test3()
    {
        $rs = asset('css/app.css');
        // $rs = $_SERVER;
        return view('home/user/test.html');
    }


}
