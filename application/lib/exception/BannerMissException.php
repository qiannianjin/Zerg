<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/3/7
 * Time: 10:55
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{

    public $code=404;
    public $msg='请求的页面不存在'；
    public $errorcode=40000;
}