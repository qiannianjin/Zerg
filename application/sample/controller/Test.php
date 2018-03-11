<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/1/20
 * Time: 14:06
 */

namespace app\sample\controller;

use think\Request;
class Test
{
    public function hello()
    {  $all=input('param.');
        //$all=Request::instance()->param();
        var_dump($all);

       /*    $name=Request::instance()->param('name');

        $age=Request::instance()->param('age');

        echo $id;
         echo  '|';
         echo $name;
         echo '|';
         echo  $age;
      //  return'hello,qiyue';*/
    }
}