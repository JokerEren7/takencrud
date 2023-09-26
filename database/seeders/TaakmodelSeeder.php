<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Taakmodel; 

class TaakmodelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('taakmodels')->insert([
            [
                'title' => 'Task 1',
                'description' => 'werken 8uur',
                'completed' => false,
            ],
            [
                'title' => 'Task 2',
                'description' => 'boodschappen voor oma',
                'completed' => true,
            ],
        ]);
    }
}
