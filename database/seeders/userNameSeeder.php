<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= [
            [
                'name' => 'administrator',
                'email' => 'administrator@gmail.com',
                'password' => Hash::make('rahasia'),
                'level' =>'1'
            ],
            [
                'name' => 'supervisor',
                'email' => 'supervisor@gmail.com',
                'password' => Hash::make('rahasia'),
                'level' =>'2'
            ],
            [
                'name' => 'staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('rahasia'),
                'level' =>'3'
            ],
            ];

            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
