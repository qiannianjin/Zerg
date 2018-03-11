<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/3/7
 * Time: 10:48
 */

namespace app\lib\exception;


class BaseException
{
    public $code=400;
    public $msg ='参数错误';
    public $errorcode=10000;
}