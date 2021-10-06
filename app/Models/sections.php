<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sections extends Model
{
    public function color()
    {
        return $this->hasOne(colors::class, 'id','color_id');
    }

    public function user()
    {
        return $this->hasOne(users::class, 'id','user_id');
    }
}
