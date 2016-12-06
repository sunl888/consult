<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wx_users extends Model
{
    /**
     * 可以被批量赋值的属性.
     * @var array
     */
    protected $fillable = [
        'openid',
        'nickname',
        'sex',
        'headimgurl',
        /*'is_init',*/
        'name',
        'phone',
        'province',
        'city',
        'area',
        'course',
        'old_school'
    ];

    public function issues(){
        return $this->hasOne('App\Models\Issue');
    }
}
