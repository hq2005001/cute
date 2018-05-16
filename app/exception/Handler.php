<?php
/**
 * 异常处理类
 * @author hq <305706352@qq.com>
 */
namespace app\exception;

class Handler extends \Cute\exceptions\ExceptionHandler
{
    
    protected function handleException($e, $result)
    {
        if($e instanceof \PDOException) {
            app('res')->dispatch($result);
        }
        parent::handleException($e, $result);
    }
}
