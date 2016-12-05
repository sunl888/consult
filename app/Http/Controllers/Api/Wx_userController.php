<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use App\Models\Wx_users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;

class Wx_userController extends Controller
{
    protected $rule = [
        'openid' =>'required|unique:wx_users,openid',
    ];
    /**
     * @param $openid 通过openid尝试查询用户信息以及他提问的所有问题
     * @return mixed 返回空值表示数据库中没有该用户信息
     */
    public function me($openid=null){
        $wx_user = Wx_users::with('Issue')->where(['openid'=>$openid])->first();
        empty($wx_user) && $wx_user=[];
        return $wx_user;
    }

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
            $data = [
                'openid'     =>$request->get('openid'),
                'nickname'   =>$request->get('nickname'),
                'sex'        =>$request->get('sex'),
                'headimgurl' =>$request->get('headimgurl'),
                //'is_init'    =>0,
                'name'       =>$request->get('name'),
                'phone'      =>$request->get('phone'),
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
}
