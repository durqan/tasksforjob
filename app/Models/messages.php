<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    public function sender()
    {
        return $this->hasOne(users::class,'id','sender_id');
    }

    public function recipient()
    {
        return $this->hasOne(users::class,'id','recipient_id');
    }

    public function section()
    {
        return $this->hasOne(sections::class, 'id', 'section_id');
    }
}
