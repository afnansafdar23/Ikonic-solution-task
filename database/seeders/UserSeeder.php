<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use the UserFactory to create fake users
        User::factory()
            ->count(10) // You can adjust the number of users you want to create
            ->create();
    }
}
