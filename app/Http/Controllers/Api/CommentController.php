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
     * 获取所有没有被软删除的文章的个数
     * @return mixed
     */
    public function count(){
        return Issue::where(['deleted_at'=>null])->get()->count();
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
    public function softdelete($issue_id=0){

        return Issue::where(['id'=>$issue_id])->delete();
    }

    /**
     * 物理删除某个评论
     * @return bool|mixed|null
     */
    public function delete($issue_id=0){
        return Issue::where(['id'=>$issue_id])->forceDelete();
    }

    /**
     * 分页显示被软删除的问题
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
     * 被软删除的问题总数
     * @return mixed
     */
    public function softDeleteCount(){
        return Issue::onlyTrashed()->get()->count();
    }

    /**
     * 恢复被软删除的问题
     * @return mixed
     */
    public function restore($issue_id=0){
        return Issue::where(['id'=>$issue_id])->restore();
    }
}
