<?php

use App\Travel;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) { 
            $travel = new Travel;
            $travel->image = $faker->imageUrl(400, 200, 'animals', true);
            $travel->destination = $faker->randomElement(['Barcellona', 'Pag', 'Ibiza', 'Gallipoli', 'Mykonos', 'Corfù', 'Rimini', 'Malta', 'Zante', 'Formentera']);
            $travel->price = $faker->numberBetween(400, 1000);
            $travel->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $travel->return_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $travel->place = $faker->randomElement(['Milano', 'Roma', 'Napoli']);
            $travel->description = $faker->paragraph();
            $travel->save();
        }
    }
}
