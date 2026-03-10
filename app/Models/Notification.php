<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table ='notification';
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function userAction()
    {
        return $this->belongsTo(User::class,'user_action_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
}
