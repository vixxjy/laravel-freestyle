<?php

use Illuminate\Database\Seeder;
use App\Event;
use Faker\Factory as Faker;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      
      foreach(range(1,20) as $index)
        {
        $title = $faker->text(80);
        
            Event::create([
                'title' => $title,
                'start_date' =>$faker->date(),
                'end_date' => $faker->date()
            ]);
        }
    }
}
