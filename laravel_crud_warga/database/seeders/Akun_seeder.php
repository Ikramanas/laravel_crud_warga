<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Akun_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [ 
            [
            'name' => 'administrator',
            'username' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('123456'),
            'level' => '1',
            ],
      
            [
            'name' => 'Kasir',
            'username' => 'kasir',
            'email' => 'kasir@kasir',
            'password' => bcrypt('123456'),
            'level' => '2',
            ],
            [
            'name' => 'Pimpinan',
            'username' => 'pimpinan',
            'email' => 'pimpinan@pimpinan',
            'password' => bcrypt('123456'),
            'level' => '3',
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
