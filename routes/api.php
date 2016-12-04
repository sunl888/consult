<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//通过openid尝试请求用户信息
$api->get('wx_user/me/openid={openid}' , "Wx_userController@me");
//获取省市三级联动(不带参数为获取所有的省份,带zone_id为获取对应的子集)
$api->get('wx_user/linkage/{parent_id?}', "Wx_userController@linkage");
//上传用户信息
$api->post('wx_user/store', "Wx_userController@store");


//添加问题
$api->post('issue/store', "IssueController@store");
//显示所有考生提出的问题
$api->get('issue/show',"IssueController@show");