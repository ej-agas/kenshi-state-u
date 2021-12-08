<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'first_name' => 'Math',
            'last_name' => 'Teacher',
            'email' => 'mathteacher@ksu.edu',
            'password' => 123123123,
        ]);
    }
}
