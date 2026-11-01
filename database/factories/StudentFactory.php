<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'class' => fake()->randomElement(['X TKJ 1', 'X TKJ 2', 'X TKJ 3', 'X BiD', 'X AKL', 'XI TKJ 1', 'XI TKJ 2', 'XI TKJ 3', 'XI BiD', 'XI AKL', 'XII TKJ 1', 'XII TKJ 2', 'XII TKJ 3', 'XII BiD', 'XII AKL']),
            'major' => fake()->randomElement(['AKL', 'BiD', 'TKJ'])
        ];
    }
}
