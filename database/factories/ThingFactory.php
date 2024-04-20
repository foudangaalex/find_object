<?php

namespace Database\Factories;

use App\Models\Thing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thing>
 */
class ThingFactory extends Factory
{
    protected $model=Thing::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = date('Y-m-d', strtotime('12/01/2024'));
        return [
            'nom' => fake()->name(),
            'description' => 'search tel',
            'nature' => 'trouve',
            'lieu' => 'ngoundere',
            'date' => $date,
        ];
        
    }
}
