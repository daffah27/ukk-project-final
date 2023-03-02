<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\pengaduan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'telp' => '08123',
            'level' => 'admin',
            'password' => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'petugas',
            'username' => 'petugas',
            'telp' => '08123',
            'level' => 'petugas',
            'password' => bcrypt('123'),
        ]);

        User::factory()->create([
            'name' => 'Masyarakat',
            'nik' => '123',
            'username' => 'masyarakat',
            'telp' => '08123',
            'level' => 'masyarakat',
            'password' => bcrypt('123'),
        ]);

                pengaduan::factory()->create([
            'isi_laporan' => 'panji',
            'lokasi_laporan' => 'makassar',
            'user_id' => '3',
            'foto' => '08123',
            'status' => 'Belum Proses',
        ]);

    }
}
