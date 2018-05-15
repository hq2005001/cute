<?php

namespace app\model;

use Cute\Model;

class TestModel  extends Model
{
    /**
     * 表名
     *
     * @var string
     */
    protected $table = 'test';

    /**
     * 模型字段
     *
     * @var array
     */
    protected $fields = [
        'name' => ['string', ['*']],
        'age' => ['integer', ['*']],
    ];

    public function test()
    {
        return 'hq';
    }
}
