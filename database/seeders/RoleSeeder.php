<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ Import this
use Illuminate\Support\Str;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('jabatan')->insert([
    ['jabatan' => 'hrd'],
    ['jabatan' => 'ketua'],
    ['jabatan' => 'wakil'],
]);
   //
    }
}
