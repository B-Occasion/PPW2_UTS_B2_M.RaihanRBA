<?php

namespace Database\Seeders;

use App\Models\PemainModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sneed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i ++){
            PemainModel::create([
                'nama_pemain' => fake() ->name(),
                'no_punggung' => fake() ->numberBetween(0, 99),
                'posisi' => fake() ->sentence(3),
            ]);
        }
    }
}
