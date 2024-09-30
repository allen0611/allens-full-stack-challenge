<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(["in-person", "hybrid", "remote"]),
            'title' => fake()->jobTitle(),
            // Adjusted salaries for 5-6 digit that range between $30,000 and $220,000.
            'salary' => '$' . number_format(fake()->numberBetween(30, 290) * 1000),
            // 50% chance of assigning an existing employer, otherwise create a new one.
            'employer_id' => fake()->boolean(50) ? Employer::inRandomOrder()->first()->id ?? Employer::factory() : Employer::factory(),
            'location' => fake()->city(),
            'description' => implode("\n\n", $this->generateLongParagraphs(5)), // Join paragraphs into one string
        ];
    }

    private function generateLongParagraphs($count)
    {
        $paragraphs = [];
        for ($i = 0; $i < $count; $i++) {
            $paragraphs[] = fake()->paragraph(rand(10, 20), true); // Generate a paragraph with 10-20 sentences
        }
        return $paragraphs;
    }
}
