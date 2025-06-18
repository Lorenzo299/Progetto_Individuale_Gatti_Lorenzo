<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['role'];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
