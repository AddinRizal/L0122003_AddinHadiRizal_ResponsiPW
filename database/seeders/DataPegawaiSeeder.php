<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class DataPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hasil Seeder tersebut akan membuat 10 data pegawai dari factory Pegawai
        Pegawai::factory()->count(10)->create();
    }
}
