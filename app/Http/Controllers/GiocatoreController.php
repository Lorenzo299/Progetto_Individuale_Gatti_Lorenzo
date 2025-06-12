<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class GiocatoreController extends Controller implements HasMiddleware
{
     public static function middleware(): array
    {
        return [
            'auth',
           
        ];
    }
}
