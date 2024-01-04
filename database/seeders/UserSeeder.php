<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'admin',
            'password' => hash::make('admin'),
            'email' =>'admin@gmail.com',
            'email_verified_at' =>now(),
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);
        User::create([

            'name' => 'utilisateur',
            'password' => hash::make('14789632'),
            'email' =>'utilisateur@gmail.com',
            'email_verified_at' =>now(),
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);


    }
}
