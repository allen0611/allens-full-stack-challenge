<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
  /**
     * Run the database seeds.
  */
  public function run(): void
  {
    // Generate 333 jobs
    Job::factory(333)->create();
  }
}
