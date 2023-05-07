<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Edicionco;
class EdicioncoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $edicioncos = ['white', 'blue', 'red', 'black'];
        foreach($edicioncos as $edico){
            Edicionco::create([
                'nombre' => $edico
            ]);

        }
    }
}
