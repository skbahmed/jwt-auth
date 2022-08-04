<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //CALLING SEEDER
        $this->call(UserTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
    }
}
