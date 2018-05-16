<?php
/**
 * 异常处理类
 * @author hq
 */
namespace app\exception;

class Handler extends \Cute\exceptions\ExceptionHandler
{
    
    protected function handleException($e, $result)
    {
        if($e instanceof \PDOException) {
            app('res')->dispatch($result);
        }
        parent::handle($e);
    }
}
