<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Notification;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dateIn',
        'foodName',
    ];

    protected $casts = [
        'dateIn' => 'date',
    ];

    protected function foodName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucwords(strtolower($value))
        );
    }

    protected static function booted()
    {
        static::created(function ($post) {
            $dates = [
                ['days' => 7, 'text' => 'Reminder: 7 days left'],
                ['days' => 3, 'text' => 'Reminder: 3 days left'],
                ['days' => 0, 'text' => 'Today is the due date!'],
            ];

            foreach ($dates as $d) {
                $notifyDate = $post->dateIn->addDays(14)->copy()->subDays($d['days']);

                Notification::create([
                    'post_id'   => $post->id,
                    'message'   => $d['text'] . ' for ' . $post->foodName,
                    'notify_at' => $notifyDate,
                ]);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
