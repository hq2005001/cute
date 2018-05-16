<?php

namespace app\crontab;

class Test extends \Cute\Crontab
{
    
    public function start()
    {
        $data = app()->controller('Index')->test();
        dd($data);
    }
}
