<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'message', 'notify_at', 'sent'];

    protected $casts = [
        'notify_at' => 'datetime'
    ];


    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

