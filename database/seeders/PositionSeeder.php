<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    public $positions = ['Attaccante', 'Centrocampista', 'Difensore', 'Portiere'];
    public function run(): void
    {
        foreach ($this->positions as $position) {
            Position::create([
                'role'=>$position
            ]);
    }}
}
