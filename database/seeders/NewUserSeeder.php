<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'username' => 'alvian',
            'name' => 'Alvian Nur Firdaus',
            'email' => 'alvian@gmail.com',
            'password' => Hash::make('password')
        ],
        [
            'username' => 'ega',
            'name' => 'M Ega Rama Fernanda',
            'email' => 'ega@gmail.com',
            'password' => Hash::make('password')
        ]
        ];
        DB::table('users')-> insert($data);
    }
}
