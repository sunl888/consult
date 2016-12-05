<?php

namespace App\Http\Controllers\Api;

use App\Models\Issue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IssueController extends Controller
{
    /**
     * @var array
     * 验证规则
     */
    protected $rule = [
        'title' =>'required',
        'description' =>'required'
    ];

    /**
     * 按时间降序显示所有的已回答的问题
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function show(){

        return Issue::with('Wx_users')
            ->with('Comment')
            ->where('comment_id','<>','0')
            ->orWhere('deleted_at','<>',null)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * 添加问题
     * @param Request $request
     * @return static
     * @throws \Exception
     */
    public function store(Request $request){
        try{
            $validator = Validator::make($request->input(), $this->rule);
            if($validator->fails()){
                throw new \Exception('数据验证失败咯.');
            }
            $data = [
                'title' =>$request->get('title'),
                'description' =>$request->get('description'),
                //wx_user_id当用户匿名提问时传0进来,否则传当前id
                'wx_user_id' =>$request->get('wx_user_id'),
            ];
            $issue = Issue::create($data);
            if(!$issue){
                throw new \Exception('问题添加失败.');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $issue;
    }

}
