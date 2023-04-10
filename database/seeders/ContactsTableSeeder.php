<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer un objet Faker pour générer des données aléatoires
        $faker = Faker::create();

        // Générer 10 contacts avec des données aléatoires
        for ($i = 0; $i < 10; $i++) {
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'message' => $faker->paragraph(1, true)
            ]);
        }
    }
}
