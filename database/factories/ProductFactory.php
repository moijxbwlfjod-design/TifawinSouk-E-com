<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        $imageName = $this->faker->uuid . '.jpg';
        Storage::disk('public')->put(
            'products/' . $imageName,
            file_get_contents('https://picsum.photos/640/480')
        );

        return [
            'name' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'slug' => $this->faker->sentence(1),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'stock' => $this->faker->numberBetween(0, 1000),
            'categorie_id' => Categorie::inRandomOrder()->first()->id,
            'image_path' => 'products/' . $imageName
        ];
    }
}
