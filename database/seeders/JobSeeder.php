<?php

namespace Database\Seeders;

use App\Models\job;
use App\Models\tag;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = tag::factory(2)->create();
        job::factory(8)->hasAttached($tags)->create(
            new Sequence(
                [
                    'featured' => false,
                    'schedule' => 'Full Time',
                ], [
                    'featured' => true,
                    'schedule' => 'Part Time',
                ]
    ));
    }
}
