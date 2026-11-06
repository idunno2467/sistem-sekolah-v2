<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schoolClasses = [
        'X TKJ 1', 
        'X TKJ 2', 
        'X TKJ 3', 
        'X BiD', 
        'X AKL', 
        'XI TKJ 1', 
        'XI TKJ 2', 
        'XI TKJ 3', 
        'XI BiD', 
        'XI AKL', 
        'XII TKJ 1', 
        'XII TKJ 2', 
        'XII TKJ 3', 
        'XII BiD', 
        'XII AKL'
        ];
        return [
            'name' => fake()->unique()->randomElement($schoolClasses),
        ];
    }
}
