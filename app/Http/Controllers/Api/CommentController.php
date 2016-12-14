<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class CommentController extends Controller
{
    protected $user = null;
    protected $rule = [
        'answer' =>'required|max:255',
        'issue_id' =>'required|exists:issues,id|unique:comments' //issue_id必须已经存在于一个数据库的某个表中
    ];

    public function __construct()
    {
        $this->user= JWTAuth::user();
    }

    /**
     * 显示所有的问题
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function lists($offset=0,$limit=5){
        $issue = Issue::with('Wx_users')
            ->with('Comment')
            ->where(['deleted_at'=>null])
            ->orderBy('created_at', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get()
            ->toArray();
        //显示回复者信息
        for ($i=0;$i<count($issue);$i++) {
            if($issue[$i]['comment'] !=null)
                $issue[$i]['comment']['anthor'] = User::where(['id'=>$issue[$i]['comment']['uid'] ])->first();
        }
        return $issue;
    }

    /**
     * 对某个问题回复
     * @param Request $request
     * @param null $issue_id
     * @return static
     * @throws \Exception
     */
    public function store(Request $request){
        $comment = $request->only('answer','issue_id');
        try{
            $validator = Validator::make($comment , $this->rule);
            if($validator->fails()){
                throw new \Exception('数据验证失败:'.$validator->errors());
            }
            $comment['uid'] = $this->user['id'];
            $comm = Comment::create($comment);
            if(!$comm){
                throw new \Exception('回复失败');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $comm;
    }

    /**
     * 软删除某个评论
     * @return mixed
     */
    public function softdelete(){
        return Issue::where(['id'=>Input::get('issue_id')])->delete();
    }

    /**
     * 物理删除某个评论
     * @return bool|mixed|null
     */
    public function delete(){
        return Issue::where(['id'=>Input::get('issue_id')])->forceDelete();
    }

    /**
     * 只显示被软删除的提问
     */
    public function only_trashed($offset=0,$limit=5){
        $issue = Issue::with('Wx_users')
            ->with('Comment')
            ->orderBy('created_at', 'desc')
            ->onlyTrashed()
            ->skip($offset)
            ->take($limit)
            ->get()
            ->toArray();
        for ($i=0;$i<count($issue);$i++) {
            if($issue[$i]['comment'] !=null)
                $issue[$i]['comment']['anthor'] = User::where(['id'=>$issue[$i]['comment']['uid'] ])->first();
        }
        return $issue;
    }

    /**
     * 恢复被软删除的问题
     * @return mixed
     */
    public function restore($issue_id=0){
        return Issue::where(['id'=>$issue_id])->restore();
    }
}
