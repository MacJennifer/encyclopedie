<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;


class HeroeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::truncate();

        // Ajouter des exemples de super-héros
        Hero::create([
            'name' => 'Superman',
            'image' => 'superman.jpg',
            'gender' => 'Male',
            'race' => 'Kryptonian',
            'description' => 'The Man of Steel'

        ]);

        Hero::create([
            'name' => 'Batman',
            'image' => 'batman.jpg',
            'gender' => 'Male',
            'race' => 'Human',
            'description' => 'The Dark Knight'
        ]);

        Hero::create([
            'name' => 'Catwoman',
            'image' => 'catwoman.jpg',
            'gender' => 'Female',
            'race' => 'Human',
            'description' => 'The Feline Fatale'
        ]);

        Hero::create([
            'name' => 'Flash',
            'image' => 'flash.jpg',
            'gender' => 'Male',
            'race' => 'Metahuman',
            'description' => 'The Fastest Man Alive'
        ]);

    }
}
