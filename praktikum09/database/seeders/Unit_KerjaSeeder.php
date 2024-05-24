<?php

namespace Database\Seeders;

use App\Models\Unit_Kerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Unit_KerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit_Kerja::insert([
            ['nama' => 'Bogor',],
            ['nama' => 'Jakarta',],
            ['nama' => 'Depok',],
            ['nama' => 'Bandung',],
            ['nama' => 'Tangerang',],
            ['nama' => 'Bekasi',],
            ['nama' => 'Nurul Fikri',],
        ]);
    }
}
