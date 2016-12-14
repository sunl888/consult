<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| 生成文档命令:  apidoc -i routes/ -o doc/
|
*/

/**
 * @api {GET} /wx_user/linkage/:parent_id 省市三级联动
 * @apiGroup user
 * @apiDescription 获取省市三级联动
 * @apiParam {String} parent_id=0 父级城市ID
 * @apiVersion 0.0.1
 */
$api->get('wx_user/linkage/{parent_id?}', "Wx_userController@linkage");
/**
 * @api {POST} /wx_user/store 保存用户信息
 * @apiGroup user
 * @apiDescription 如localStore中没有用户信息则让用户填写相关信息并保存到数据库中.
 * @apiParam {String} name 用户姓名
 * @apiParam {String} email 用户的email
 * @apiParam {String} phone 联系方式
 * @apiParam {String} province 省份
 * @apiParam {String} city 城市
 * @apiParam {String} area 地区
 * @apiParam {Number} course 成绩
 * @apiParam {String} old_school 所在学校
 * @apiVersion 1.1.0
 * @apiErrorExample {json} Error-Response:
 *  {
 *      "message": "数据验证失败.",
 *      "status_code": 500
 *  }
 */
$api->post('wx_user/store', "Wx_userController@store");

/**
 * @api {POST} /issue/store 提交问题
 * @apiGroup issue
 * @apiDescription 考生提交问题(可以匿名提问)
 * @apiVersion 0.0.1
 * @apiParam {String} title 标题
 * @apiParam {String} description 问题的详细描述
 * @apiParam {Number} wx_user_id 用户id(存储在localStore中,没有则跳转到填写信息页面,如果用户选择跳过则表示匿名提问)
 */
$api->post('issue/store', "IssueController@store");
/**
 * @api {GET} /issue/show/:offset/:limit 显示已回复的问题
 * @apiGroup issue
 * @apiDescription 显示所有管理员已回复的问题
 * @apiParam {Number} offset=0 偏移量
 * @apiParam {Number} limit=5 显示的个数
 * @apiVersion 0.0.3
 */
$api->get('issue/show/{offset?}/{limit?}',"IssueController@show");

/**
 * @api {POST} /admin/login 管理员登录
 * @apiGroup Admin
 * @apiDescription 管理员登录接口
 * @apiVersion 0.0.1
 * @apiParam {String} name 用户名
 * @apiParam {String} password 密码
 */
$api->post('admin/login', "AuthenticateController@authenticate");
/**
 * @api {POST} /admin/create 管理员注册
 * @apiGroup Admin
 * @apiDescription 管理员注册接口
 * @apiVersion 0.0.1
 * @apiParam {String} name 用户名
 * @apiParam {String} password 密码
 * @apiParam {String} email 邮箱
 */
$api->post('admin/create', "AuthenticateController@create");
/**
 * @api {GET} /admin/refresh_token 刷新token
 * @apiGroup Admin
 * @apiDescription 刷新token接口
 * @apiVersion 0.0.1
 * @apiParam {String} token 旧的token
 */
$api->get('admin/refresh_token', "AuthenticateController@refreshToken");


$api->group(['middleware' => 'jwt.auth'], function ($api) {
    /**
     * @api {GET} /admin/me 获取管理员信息
     * @apiGroup Admin
     * @apiDescription 获取管理员信息
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     */
    $api->get('admin/me', "AuthenticateController@getAuthenticatedUser");
    /**
     * @api {GET} /admin/issue/lists 获取所有没有被软删除的问题
     * @apiGroup Admin
     * @apiDescription 获取所有的问题以及问题的详细信息
     * @apiVersion 0.0.1
     * @apiParam {Number} offset=0 偏移量
     * @apiParam {Number} limit=5 每页显示的个数
     * @apiParam {String} token token
     */
    $api->get('admin/issue/lists', "CommentController@lists");
    /**
     * @api {GET} /admin/issues/count 获取所有没有被软删除的问题的总数
     * @apiGroup Admin
     * @apiDescription 获取所有没有被软删除的问题的总数
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     */
    $api->get('admin/issues/count', "CommentController@lists_count");
    /**
     * @api {POST} /admin/comment/store 回复某个问题
     * @apiGroup Admin
     * @apiDescription 通过issue_id回复某个问题
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     * @apiParam {String} issue_id 问题对应的id
     * @apiParam {String} answer 回复的详情
     */
    $api->post('admin/comment/store', "CommentController@store");
    /**
     * @api {GET} /admin/issue/softdelete 对某个问题软删除
     * @apiGroup Admin
     * @apiDescription 对某个问题软删除
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     * @apiParam {String} issue_id 问题对应的id
     */
    $api->get('admin/issue/softdelete', "CommentController@softdelete");
    /**
     * @api {GET} /admin/issue/delete 对某个问题强制删除
     * @apiGroup Admin
     * @apiDescription 对某个问题强制删除
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     * @apiParam {String} issue_id 问题对应的id
     */
    $api->get('admin/issue/delete', "CommentController@delete");
    /**
     * @api {GET} /admin/issue/list_softdel 分页显示被软删除的问题
     * @apiGroup Admin
     * @apiDescription 分页显示被软删除的问题
     * @apiVersion 0.0.1
     * @apiParam {Number} offset=0 偏移量
     * @apiParam {Number} limit=5 每页显示的个数
     * @apiParam {String} token token
     */
    $api->get('admin/issue/list_softdel', "CommentController@only_trashed");
    /**
     * @api {GET} /admin/soft_issues/softdelete_count 回收站中问题的总数
     * @apiGroup Admin
     * @apiDescription 回收站中问题的总数
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     */
    $api->get('admin/soft_issues/softdelete_count', "CommentController@softDeleteCount");
    /**
     * @api {GET} /admin/issue/restore 恢复被软删除的问题
     * @apiGroup Admin
     * @apiDescription 恢复被软删除的问题
     * @apiVersion 0.0.1
     * @apiParam {String} token token
     * @apiParam {String} issue_id 问题的id
     */
    $api->get('admin/issue/restore', "CommentController@restore");

});