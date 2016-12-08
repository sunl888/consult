<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['issue_id','answer','uid'];

    public function issue(){
        return $this->hasOne('App\Models\Issue');
    }

    public function user(){
        return $this->hasOne('App\Models\User');
    }


    /**
     * 重写create方法
     * @param array $comment
     * @return static
     */
    static public function create(array $comment = []){
        $comm = parent::create($comment);
        $issue['comment_id']=$comm['id'];
        Issue::where(['id'=>$comment['issue_id']])->update($issue);
        return $comm;
    }
}
