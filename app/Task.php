<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'content', 'user_id'];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
