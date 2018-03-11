<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/3/7
 * Time: 10:36
 */


namespace app\lib\exception;
use Exception;
use think\exception\Handle;


class ExceptionHandler extends Handle
{


    public function render(Exception $ex)
    {
        return json('~~~~~~~~~~~~~');
    }

}