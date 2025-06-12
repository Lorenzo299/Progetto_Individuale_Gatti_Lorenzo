<?php

namespace App\Livewire;

use App\Models\Player;
use Livewire\Component;

class CreatePlayer extends Component
{
    public $name;
    public $age;
    public $team;

    protected $rules = [
        'name' => 'required|string|min:3',
        'team' => 'required|string|min:3',
        'age' => 'required|integer',
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
        Player::create([
           'name'=>$this->name,
           'age'=>$this->age,
           'team'=>$this->team,
        ]);
        session()->flash('message', 'Giocatore aggiunto con successo');
        $this->reset();
        
    }

    public function render()
    {
        return view('livewire.create-player');
    }
}
