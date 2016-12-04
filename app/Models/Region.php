<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * 可以被批量赋值的字段
     * @var array
     */
    protected $fillable = [
        'zone_id','name','parent_id','level',
    ];

}
