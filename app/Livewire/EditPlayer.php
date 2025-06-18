<?php

namespace App\Livewire;

use App\Models\Player;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditPlayer extends Component
{
     use WithFileUploads;
    public $name;
    public $age;
    public $team;
    public $img;
    public $player;

    protected $rules = [
        'name' => 'required|string|min:3',
        'team' => 'required|string|min:3',
        'age' => 'required|integer',
        // 'img'  => 'nullable|image|max:2048'
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'string' => 'Il campo :attribute deve essere un testo.',
        'integer' => 'Il campo :attribute deve essere un numero.',
        'min' => 'Il campo :attribute non ha sufficienti caratteri.',
    ];
    public function mount(){
        $this->name=$this->player->name;
        $this->age=$this->player->age;
        $this->team=$this->player->team;
        $this->img=$this->player->img;
    }

    public function update()
    {
         $this->validate();
        //  $this->img=$this->img?->store('images','public') ?? $this->img;
         $this->player->update([
             'name'=>$this->name,
             'age'=>$this->age,
             'team'=>$this->team,
            'img'=>$this->img->store('img', 'public'),
             'user_id'=>Auth::user()->id,
             
            ]);
        session()->flash('message', 'Giocatore modificato con successo');
        $this->reset();
        
    }
    public function destroy(Player $player)
    {
        $this->player->delete();
        redirect(route('homepage'));
    }
    public function render()
    {
        return view('livewire.edit-player');
    }
}
