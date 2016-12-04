<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title','description','wx_user_id'];


    //一个问题对应一个回复
    public function comment(){
        return $this->hasOne('App\Models\Comment');
    }
    //一个问题对应一个用户
    public function wx_users(){
        return $this->belongsTo('App\Models\Wx_users','id');
    }
}
