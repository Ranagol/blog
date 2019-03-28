<?php

use Illuminate\Database\Seeder;
use App\Comment;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 200;
        for ($i=0; $i < $limit; $i++) { 
        	Comment::create([
        		'user_id' => $faker->numberBetween($min = 1, $max = 10),
        		'post_id' => $faker->numberBetween($min = 1, $max = 50),
        		'content' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),     		
        	]);
        }
    }
}
