<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat 3 barang  dengan nama yang ditentukan menggunakan sequence
        //bisa dicoba naikkan count tanpa menambahkan nama baru untuk melihat bagamiana cara sequence bekerja
        Barang::factory()->count(3)->sequence(
            ['nama' => 'Apel'],
            ['nama' => 'Kelengkeng'],
            ['nama' => 'Durian'],
        )->create();
    }
}
