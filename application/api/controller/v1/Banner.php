<?php
/**
 * Created by PhpStorm.
 * User: whz8935
 * Date: 2018/1/22
 * Time: 16:38
 */

namespace app\api\controller\v1;

   use app\api\validate\IDMustBePositiveInt;
   use app\api\validate\TestValidate;
   use think\Exception;
   use think\Validate;
   use app\api\model\Banner as BannerModel;

class Banner
{
//@id banner的id号
    //获取指定id的banner信息
    //@http GET
    //@URL /banner/:id

       public function getBanner($id){

           (new IDMustBePositiveInt())->goCheck();

          $banner = BannerModel::getBannerByID($id);

          return $banner;




  /* $data = [
       'name'=>'vendor11111',
            'email'=>'vendorqq.com'
        ];


  /* $validate = new Validate([
       'name'=>'require|max:10',
       'email'=>'email'
   ]);*/

    //  $validate = new IDMustBePositiveInt();
    // $validate=new TestValidate();
   //  $result = $validate->batch()->check($data);
     //独立验证
        //验证器
        //   var_dump( $validate->geterror());
     //      if($result){}*/

    }
}