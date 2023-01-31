<?php

namespace Database\Factories;

use App\Models\JenisBarang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jenis_barang_id' => JenisBarang::all()->random()->id,
            'nama_barang' => fake()->userAgent(),
            'harga' => 'Rp. 100.000,00',
            'jumlah' => rand(0, 20),
        ];
    }
}
