<?php

namespace Database\Seeders;

// database/seeders/MahasiswaSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        Mahasiswa::create([
            'nim' => '123456',
            'nama' => 'Herman Beck',
            'alamat' => 'Jl. Sudirman No. 1',
            'prodi' => 'Teknik Informatika',
            'email' => 'herman@example.com'
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}

