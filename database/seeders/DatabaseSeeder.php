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
        $this -> call(NewUserSeeder::class);
        $this -> call(PostPengalaman::class);
        $this -> call(PostSeeder::class);
    }
}
