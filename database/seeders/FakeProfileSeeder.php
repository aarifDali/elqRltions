<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class FakeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run(): void
    {
        $faker = Faker::create();

        $studentIds = DB::table('students')->pluck('id')->toArray();
       
        // Seed 10 users
        for ($i = 0; $i < 10; $i++) {
            $studentId = $studentIds[array_rand($studentIds)];
            $email = $faker->email; // Unique email
            $phone = $faker->phoneNumber; // Unique mobile
            // Insert user record
            Profile::create([
                'email' => $email,
                'phone' => $phone,
                'student_id' => $studentId
            ]);
        }
    }

}
