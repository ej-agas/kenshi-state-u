<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'McAdmin',
            'email' => 'admin@ksu.edu',
            'password' => 123123123,
        ]);
    }
}
