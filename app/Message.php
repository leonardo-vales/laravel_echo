<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['content'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
