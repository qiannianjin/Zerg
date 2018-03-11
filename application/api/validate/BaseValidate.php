<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/1/23
 * Time: 16:53
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
      public function goCheck()
      {
          $request = Request::instance();
          $param = $request->param();
          $result = $this->check($param);
          if(!$result)
          {$error = $this->error;
              throw new Exception($error);}
              else{
              return true;
              }

      }
}