<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use App\Models\Issue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class CommentController extends Controller
{
    protected $user = null;
    protected $rule = [
        'answer' =>'required|max:255',
    ];

    public function __construct()
    {
        $this->user= JWTAuth::user();
    }

    /**
     * 显示所有的问题
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function lists(){
        return Issue::with('Wx_users')
            ->with('Comment')
            ->where(['deleted_at'=>null])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * 对某个问题回复
     * @param Request $request
     * @param null $issue_id
     * @return static
     * @throws \Exception
     */
    public function store(Request $request , $issue_id = null){
        $comment = $request->only('answer');
        try{
            $validator = Validator::make($comment , $this->rule);
            if($validator->fails()){
                throw new \Exception('数据验证失败.');
            }
            $comment['issue_id'] = $issue_id;
            $comment['uid'] = $this->user['id'];
            $comm = Comment::create($comment);
            if(!$comm){
                throw new \Exception('问题添加失败.');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $comm;
    }
}
