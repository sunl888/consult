<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issue extends Model
{
    public $table='issues';
    //软删除trait
    use SoftDeletes;

    /**
     * 应该被调整为日期的属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['title','description','wx_user_id'];

    //一个问题对应一个回复
    public function comment(){
        return $this->hasOne('App\Models\Comment','issue_id');
    }

    //一个问题对应一个用户
    public function wx_users(){
        return $this->belongsTo('App\Models\Wx_users','wx_user_id');
    }
}
