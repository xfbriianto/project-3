<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;

class BarangFactory extends Factory
{
    protected $model = Barang::class;

    public function definition()
    {
        $categories = ['Elektronik','Perkakas','Material'];
        return [
            'name' => $this->faker->word(),
            'category' => $this->faker->randomElement($categories),
            'stock' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->randomFloat(2, 10000, 500000),
            'description' => $this->faker->sentence(),
        ];
    }
}