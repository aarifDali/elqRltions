<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class FakeStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $first_name = $faker->unique()->userName; // Unique username
            $second_name = $faker->unique()->userName; // Unique email
            
            Student::create([
                'first_name' => $first_name,
                'second_name' => $second_name,
            ]);
        }
    }
}
