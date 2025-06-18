<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
        protected $fillable = ['name', 'age', 'team','user_id', 'img', 'position_id' ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }
}
