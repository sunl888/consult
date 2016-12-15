<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Dingo\Api\Exception\StoreResourceFailedException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateController extends Controller
{
    /**
     * 验证规则
     * @var array
     */
    protected  $rule = [
        'name' =>'required|unique:users|max:255',
        'password' =>'required|min:5',
        'email' =>'required|email|max:255'
    ];
    protected $mess = [
        'name.required' =>'用户名必须填写',
        'name.unique' =>'用户名已存在',
        'name.max'=>'用户名最长255位',
        'password.required' =>'密码必须填写',
        'password.min' =>'密码最短为5位',
        'email.email' =>'请填写正确的邮箱',
        'email.required' =>'邮箱必须填写喔',
    ];
    /**
     * 登录
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');
        try {
            // 验证用户名和密码并创建一个token
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => '用户名或密码错误.'], 401);
            }
        } catch (JWTException $e) {
            // 创建token出错了
            return response()->json(['error' => '创建token失败.'], 500);
        }
        // 返回token
        return response()->json(compact('token'));
    }

    /**
     * 通过token来获取用户信息,如果token过期或者无效则返回空数组
     * @param $token
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAuthenticatedUser($token=null)
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['没找到该用户'], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token过期'], $e->getMessage());
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token无效'], $e->getMessage());
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token不存在'], $e->getMessage());
        }
        return response()->json(compact('user'));
    }

    /**
     * 刷新token
     * @return \Illuminate\Http\JsonResponse
     * @throws AuthenticationException
     */
    public function refreshToken(){
        try {
            //获取老token
            $old_token = JWTAuth::getToken();
            //刷新token
            $token = JWTAuth::refresh($old_token);
            //让老token无效
            JWTAuth::invalidate($old_token);
        } catch (TokenExpiredException $e) {
            throw new \Exception($e->getMessage());
        } catch (JWTException $e) {
            throw new \Exception($e->getMessage());
        }
        return response()->json(compact('token'));
    }
    /**
     * 创建账号
     * @param Request $request
     * @return static
     */
    public function create(Request $request)
    {
        $credentials = $request->only('name','password','email');
        $this->validator($credentials);
        return User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);
    }

    /**
     * 数据验证
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, $this->rule,$this->mess);
        if ($validator->fails()) {
            throw new StoreResourceFailedException($validator->errors()->first());
        }
        return $validator;
    }


}
