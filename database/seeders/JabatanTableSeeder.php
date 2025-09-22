<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- add this
use Illuminate\Support\Facades\Hash; // (optional if you hash passwords)

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jabatan')->insert([
            ['kode' => 'Ka.BALAI', 'jabatan' => 'Ka.Balai', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'Ka.Sub.TU', 'jabatan' => 'Ka.Sub.TU', 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'PEMP', 'jabatan' => 'PEMP','created_at' => now(), 'updated_at' => now()],
            ['kode' => 'LPKPH', 'jabatan' => 'LPKPH','created_at' => now(), 'updated_at' => now()],
            ['kode' => 'Staff', 'jabatan' => 'Staff','created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
