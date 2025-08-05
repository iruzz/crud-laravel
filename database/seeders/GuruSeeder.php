<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nama'=> 'Aqsa Bint',
            'umur'=>'200',
            'email'=>'aqldybolot@gmail.com'
        ]);
    }
}
