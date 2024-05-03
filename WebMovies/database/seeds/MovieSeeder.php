<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for($i=0;$i<100;$i++){
            DB::table('movies')->insert([
                'title' => $faker->word(2),
                'genre' => $faker->word(),
                'year' =>$faker->year(),
                'poster' => $faker->url()
            ]);
        }
        
    }
}
