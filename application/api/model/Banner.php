<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/1/24
 * Time: 15:26
 */

namespace app\api\model;

use app\api\validate\IDMustBePositiveInt;
use think\Exception;

class Banner
{
   public static function getBannerByID($id)
   {   try{
      1/0;
   }
      catch(Exception $ex){
       throw $ex;

      }
       return 'this is Banner info';
   }
}