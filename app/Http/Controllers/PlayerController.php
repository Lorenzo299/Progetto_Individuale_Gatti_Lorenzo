<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PlayerController extends Controller implements HasMiddleware
{
     public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['player.index'])
           
        ];
    }
    public function index()
    {
        $players= Player::simplePaginate(3);
        return view('player.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('player.show', compact('player'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
                return view('player.edit', compact('player'));

    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }

    public function filter_role(Position $position){
return view('player.index_position', compact('position'));
    }
}
