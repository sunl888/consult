<?php

namespace App\Http\Controllers\Api;

use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

    protected $mess = [
        'title.required' =>'标题不能为空.',
        'description.required' =>'内容不能为空.',
    ];
    /**
     * 显示所有的已回答的问题
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function show($offset=0,$limit=5){
        $issue = Issue::with('Wx_users')
            ->with('Comment')
            ->where('comment_id','<>',0)
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
     * 添加问题
     * @param Request $request
     * @return static
     * @throws \Exception
     */
    public function store(Request $request){
        try{
            $validator = Validator::make($request->input(), $this->rule, $this->mess);
            if($validator->fails()){
                throw new \Exception('数据验证失败咯:'.$validator->errors()->first());
            }

            $data = [
                'title' =>$request->get('title'),
                'description' =>$request->get('description'),
                //wx_user_id当用户匿名提问时传0进来,否则传当前id
                'wx_user_id' =>empty($request->get('wx_user_id'))?0:$request->get('wx_user_id'),
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
