<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    Program::create([
    'name' => 'Coding Bootcamp',
    'category_id' => 1,
    'price' => 1500000,
    'start_date' => now(),
    ]);

    }
}
