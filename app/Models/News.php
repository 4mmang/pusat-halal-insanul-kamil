<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    protected $guarded = [];
}
