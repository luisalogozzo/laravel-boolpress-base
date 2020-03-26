<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Chat;
class ChatTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++){
        $newFakeMessage = new Chat();
        $newFakeMessage->title = $faker->realText($maxNbChars = 50, $indexSize = 2);
        $newFakeMessage->sender = $faker->title . $faker->userName;
        $newFakeMessage->text = $faker->paragraph;
        $newFakeMessage->save();
      }
}
}
