<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 50;
        for ($i=0; $i < $limit; $i++) { 
        	Post::create([
        		'user_id' => $faker->numberBetween($min = 1, $max = 10),
        		'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        		'content' => $faker->paragraph($nbSentences = 20, $variableNbSentences = true),     		
        	]);
        }
    }
}
