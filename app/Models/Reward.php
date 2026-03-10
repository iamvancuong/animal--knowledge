<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;
    protected $table ='reward';

    public function history_reward()
    {
        return $this->belongsToMany(Reward::class,'reward_between_user','user_id', 'reward_id');
    }
}
