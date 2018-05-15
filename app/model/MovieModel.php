<?php

namespace app\model;

use Cute\Model;

class MovieModel  extends Model
{
    /**
     * 表名
     *
     * @var string
     */
    protected $table = 'users';
    
    protected $genId = false;

    /**
     * 模型字段
     *
     * @var array
     */
    protected $fields = [
        'account' => ['string', ['*']],
        'email' => ['string', ['*']],
        'password' => ['string', ['*']],
        'username' => ['string', ['*']],
        'gender' => ['string', ['*']],
        'status' => ['integer', ['*']],
        'remember_token' => ['string'],
        'belonging' => ['integer', ['*']],
        'created_at' => ['integer'],
        'updated_at' => ['integer'],
    ];

    public function test()
    {
        return 'hq';
    }
}
