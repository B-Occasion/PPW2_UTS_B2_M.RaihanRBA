<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\somethingmodel;

class somethingseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i ++){
            somethingmodel::create([
                'name' => fake() ->name(),
                'description' => fake() ->sentence(5),
            ]);
        }
    }
}
