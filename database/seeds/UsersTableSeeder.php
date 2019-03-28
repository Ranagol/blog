<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 9;
        for ($i=0; $i < $limit; $i++) { 
        	User::create([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'password' => $faker->password,
        	]);
        }
    }
}
