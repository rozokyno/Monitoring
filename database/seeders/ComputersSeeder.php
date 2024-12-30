<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputersSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([
            [
                'nama' => 'Computer 1',
                'ip' => '192.168.1.2',
                'mac' => '00:14:22:01:23:45',
                'jenis' => 'Laptop',
                'status' => 'online',
                'waktu_terhubung' => now(),
                'bandwidth' => 1258291, // dalam byte (1.2 MB)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
