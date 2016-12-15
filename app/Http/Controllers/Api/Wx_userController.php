<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use App\Models\Wx_users;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class Wx_userController extends Controller
{
    protected $rule = [
        'name' =>'required',
        'email' =>'email',
        'phone'=>['required','regex:/^1[34578][0-9]{9}$/'],
    ];
    protected $mess = [
        'name.required' =>'用户名必须填写.',
        'email.email' =>'请填写正确的邮箱.',
        'phone.required' =>'手机号码必须要填写.',
        'phone.regex' =>'请填写正确的手机号码'
    ];

    /**
     * 用户信息
     * @return mixed
     * @throws \Exception
     */
    public function userInfo(){
            $user_id = Input::get('user_id');
            if(empty($user_id)){
                throw new \Exception('用户id不能为空.');
            }
            return Wx_users::findOrFail($user_id);
    }
    /**
     * 添加用户信息.
     * @param Request $request
     * @return static
     * @throws \Exception
     */
    public function store(Request $request){
        try{
            $validator = Validator::make($request->input(), $this->rule, $this->mess);
            if($validator->fails()){
                throw new \Exception('数据验证失败:'.$validator->errors()->first());
            }
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
                throw new \Exception('数据插入失败,未知错误.');
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
}
