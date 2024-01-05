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
            'description' => 'Superman est surement le super-héros le plus connu au monde dans le sens où il a été un des précurseurs, toujours en activité aujourd’hui, et qu’il représente tout ce que peut être un super-héros, invulnérable avec de grands pouvoirs, luttant pour la veuve et l’orphelin et tentant de rendre le monde meilleur. Il atteint le rang d’icône culturel de nos jours. Superman apparaît pour la toute première fois en même temps que le premier numéro de Action Comics, le 30 juin 1938, mais est déjà créer depuis 1932 grâce à l’écrivain américain Jerry Siegel et au dessinateur canadien Joe Shuster. Le super-homme aura très vite beaucoup de succès et apparaitra dans les journaux, à la radio, à la télévision, dans les jeux vidéo, faisant de lui le super-héros de référence mais surtout permettant d’installer le « genre » comic book dans la conscience populaire et de donner vie à tous les personnages qui suivront.'

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
