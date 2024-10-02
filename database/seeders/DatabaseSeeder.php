<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
     * Seed the application's database.
  */ 
  public function run(): void
  {
    // Ensure uniqueness of emails using firstOrCreate to prevent duplicates
    foreach (range(1, 33) as $index) {
      User::firstOrCreate(
        ['email' => fake()->unique()->safeEmail()],
        [
          'first_name' => fake()->firstName(),
          'last_name' => fake()->lastName(),
          'email_verified_at' => now(),
          'password' => bcrypt('passw0rd!'),
          'remember_token' => Str::random(10),
          'admin' => false,
        ]
      );
    }

    $this->call(JobSeeder::class);
  }
}
 