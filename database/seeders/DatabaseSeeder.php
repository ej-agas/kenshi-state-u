<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Teacher;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $numOfStudents = 5;
        $faker = Factory::create();

        Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'McAdmin',
            'email' => 'admin@ksu.edu',
            'password' => 123123123,
        ]);

        $teacher1 = Teacher::create([
            'first_name' => 'Eren',
            'last_name' => 'Yeager',
            'email' => 'eYeager@ksu.edu',
            'password' => 123123123,
        ]);

        $this->createStudents($faker, $teacher1, $numOfStudents);

        $teacher2 = Teacher::create([
            'first_name' => 'Mikasa',
            'last_name' => 'Ackerman',
            'email' => 'mAckerman@ksu.edu',
            'password' => 123123123,
        ]);

        $this->createStudents($faker, $teacher2, $numOfStudents);

        $teacher3 = Teacher::create([
            'first_name' => 'Armin',
            'last_name' => 'Arlert',
            'email' => 'aArlert@ksu.edu',
            'password' => 123123123,
        ]);

        $this->createStudents($faker, $teacher3, $numOfStudents);

        $teacher4 = Teacher::create([
            'first_name' => 'Hange',
            'last_name' => 'Zoe',
            'email' => 'hZoe@ksu.edu',
            'password' => 123123123,
        ]);

        $this->createStudents($faker, $teacher4, $numOfStudents);
    }

    private function createStudents(Generator $faker, Teacher $teacher, int $numOfStudents): void
    {
        for ($i = 1; $i <= $numOfStudents; $i++) {

            $firstName = $faker->firstName;
            $lastName = $faker->lastName;

            $teacher->students()->create([
                'first_name' => $firstName,
                'middle_name' => $firstName,
                'last_name' => $lastName,
                'email' => \strtolower(\substr($firstName, 0, 2)) . $lastName . '@ksu.edu',
                'password' => 123123123
            ]);
        }
    }
}
