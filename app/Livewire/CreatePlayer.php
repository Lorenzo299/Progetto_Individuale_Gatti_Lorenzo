<?php

namespace App\Livewire;

use App\Models\Player;
use Livewire\Component;
use App\Models\Position;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreatePlayer extends Component
{
    use WithFileUploads;
    public $name;
    public $age;
    public $team;
    public $img;
    public $posizione;

    protected $rules = [
        'name' => 'required|string|min:3',
        'team' => 'required|string|min:3',
        'age' => 'required|integer',
        'posizione' => 'required',        
        'img' => 'required',        
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'string' => 'Il campo :attribute deve essere un testo.',
        'integer' => 'Il campo :attribute deve essere un numero.',
        'min' => 'Il campo :attribute non ha sufficienti caratteri.',
    ];

    public function store()
    {
         $this->validate();
        //  $this->img=$this->img?->store('images','public') ?? $this->img;
         Player::create([
             'name'=>$this->name,
             'position_id'=>$this->posizione,
             'age'=>$this->age,
             'team'=>$this->team,
             'img'=>$this->img->store('img', 'public'),
             'user_id'=>Auth::user()->id,
             
            ]);
        session()->flash('message', 'Giocatore aggiunto con successo');
        $this->reset();
        
    }

    public function render()
    {
        $positions= Position::all();
        return view('livewire.create-player', compact('positions'));
    }
}
