<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\JenisBarang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        JenisBarang::create([
            'jenis_barang' => 'Makanan',
        ]);
        JenisBarang::create([
            'jenis_barang' => 'Furnitur',
        ]);
        JenisBarang::create([
            'jenis_barang' => 'ATK',
        ]);
        JenisBarang::create([
            'jenis_barang' => 'Elektronik',
        ]);

        \App\Models\Barang::factory(30)->create();
    }
}
