<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            [
                'nama' => 'Dr. Ilyas Abdul Aziz',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '2003-07-25',
                'kategori' => 'Umum',
                'telpon' => '0808986756',
                'alamat' => 'Jl. Merdeka No.1',
                'id_unitkerja' => '1',
            ],
            [
                'nama' => 'Dr. Lycel Tamalia',
                'gender' => 'P',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '2004-12-17',
                'kategori' => 'Psikologi',
                'telpon' => '0978675664',
                'alamat' => 'Jl. Satria Ivo No.1',
                'id_unitkerja' => '2',
            ],
            [
                'nama' => 'Dr. Lana Aprilia',
                'gender' => 'P',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1990-07-22',
                'kategori' => 'Gigi',
                'telpon' => '08978654',
                'alamat' => 'Jl. Suka Hati No.1',
                'id_unitkerja' => '3',
            ],
            [
                'nama' => 'Dr. Zahwa Aulia Agasta',
                'gender' => 'P',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '2004-11-17',
                'kategori' => 'Spesialis',
                'telpon' => '089786754',
                'alamat' => 'Jl. Suka Hati No.1',
                'id_unitkerja' => '4',
            ],
        ]);
    }
}
