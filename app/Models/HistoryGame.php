<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryGame extends Model
{
    use HasFactory;
    protected $table ='history_game';

    public function getTopicName(){
        return $this->belongsTo(Topic::class,'topic_id');
    }
}
