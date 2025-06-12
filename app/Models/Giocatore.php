<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Giocatore extends Model
{
    protected $fillable = [
        'name', 'age', 'team'
    ];
}
