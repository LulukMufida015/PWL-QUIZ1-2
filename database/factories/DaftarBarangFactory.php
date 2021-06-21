<?php

namespace Database\Factories;

use App\Models\DaftarBarang;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarBarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DaftarBarang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_supplier'=>'1',
            'nama_barang'=>'kerudung_pasmina',
            'stok'=>'150',
            'harga'=>'20000'
        ];
    }
}
