<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/1/23
 * Time: 12:53
 */

namespace app\api\validate;




use think\Validate;

class TestValidate extends Validate
{
     protected $rule=[
          'name'=>'require|max:10',
       'email'=>'email'
         ];
}