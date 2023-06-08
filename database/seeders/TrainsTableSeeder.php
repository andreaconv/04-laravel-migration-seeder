<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    for ($i=0; $i < 15; $i++) {
      $new_train = new Train();

      $new_train->azienda = $faker->company();
      $new_train->stazione_partenza = $faker->city();
      $new_train->stazione_arrivo = $faker->city();
      $new_train->orario_partenza = $faker->time();
      $new_train->orario_arrivo = $faker->time();
      $new_train->codice_treno = $faker->randomNumber(5, true);
      $new_train->numero_carrozze = $faker->randomDigit();
      $new_train->puntuale = $faker->boolean();
      $new_train->cancellato = $faker->boolean();
      $new_train->save();
    }
  }
}
