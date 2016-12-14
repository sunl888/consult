<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use App\Models\Wx_users;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class Wx_userController extends Controller
{
    protected $rule = [
        //'openid' =>'required|unique:wx_users,openid',
        'name' =>'required',
        'email' =>'email',
        'phone'=>['required','regex:/^1[34578][0-9]{9}$/'],

        //'email' =>['required_with:email','email']//当email有值的情况下验证其是否合法
    ];

    /**
     * 添加用户信息.
     * @param Request $request
     * @return static
     * @throws \Exception
     */
    public function store(Request $request){
        try{
            $validator = Validator::make($request->input() , $this->rule);
            if($validator->fails()){
                throw new \Exception('数据验证失败.');
            }
            /*echo 'OK';
            dd($request->all());*/
            $data = [
                'name'       =>$request->get('name'),
                'phone'      =>$request->get('phone'),
                'email'      =>$request->get('email'),
                'province'   =>$request->get('province'),
                'city'       =>$request->get('city'),
                'area'       =>$request->get('area'),
                'course'     =>$request->get('course'),
                'old_school' =>$request->get('old_school'),
            ];
            $wx_user = Wx_users::create($data);
            if(!$wx_user){
                throw new \Exception('数据插入失败.');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $wx_user;
    }

    /**
     * 获取三级省市联动
     * @param int $parent_id
     * @return mixed
     */
    public function linkage($parent_id = 0){
        return Region::where(['parent_id'=>$parent_id])->get();
    }

    /**
     * 文理科
     * @return array
     */
    /*public function science(){
    }*/
}
