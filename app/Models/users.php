<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function group()
    {
        return $this->belongsToMany(groups::class,'group_user','user_id','group_id');
    }

    public function authorizate_users(){
        return $this->belongsToMany(groups::class,'group_user','user_id','group_id')->wherePivot('group_id', 7);
    }
}
