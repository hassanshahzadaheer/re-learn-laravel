<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
     Job::factory()->count(20)->hasAttached($tags)->create(new Sequence(
         [
             'featured' => false,
             'time' => 'Full Time '
         ]
         ,[
             'featured' => true,
             'time' => 'Part Time '
         ]
     ));
    }
}
