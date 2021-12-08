<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    use WithFaker;

    public function run(): void
    {
        $numberOfStudents = 100_000;

        for ($i = 0; $i <= $numberOfStudents; $i++) {
            DB::table('students')->insert([
                'name' => $this->faker->name,
                'email' => $this->faker->safeEmail,
                'password' => Hash::make('password')
            ]);
        }
    }
}
