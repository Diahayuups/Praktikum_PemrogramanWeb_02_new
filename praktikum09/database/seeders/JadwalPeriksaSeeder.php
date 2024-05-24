<?php

namespace Database\Seeders;

use App\Models\JadwalPeriksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalPeriksa::insert([
            [
                'tgl' => '2024-06-01',
                'berat' => '67 kg',
                'tinggi' => '176 cm',
                'tensi' => '120',
                'keterangan' => 'Perlu pemeriksaan lebih lanjut',
                'id_pasien' => '1',
                'id_dokter' => '1',
            ],
            [
                'tgl' => '2024-06-05',
                'berat' => '40 kg',
                'tinggi' => '155 cm',
                'tensi' => '133',
                'keterangan' => 'Perlu pemeriksaan lebih lanjut',
                'id_pasien' => '2',
                'id_dokter' => '2',
            ],
            [
                'tgl' => '2024-06-8',
                'berat' => '50kg',
                'tinggi' => '165 cm',
                'tensi' => '130',
                'keterangan' => 'Perlu pemeriksaan lebih lanjut',
                'id_pasien' => '3',
                'id_dokter' => '3',
            ],
            [
                'tgl' => '2024-06-10',
                'berat' => '44 kg',
                'tinggi' => '160 cm',
                'tensi' => '110',
                'keterangan' => 'Perlu pemeriksaan lebih lanjut',
                'id_pasien' => '4',
                'id_dokter' => '4',
            ],
        ]);
    }
}
