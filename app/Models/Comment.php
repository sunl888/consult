<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function issue(){
        return $this->belongsTo('App\Models\Issue');
    }
}
