<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create fake users
        $faker = Faker::create();
		foreach (range(1,10) as $index) {
	        $user = new User;
	        $user->name = $faker->unique()->name;
	        $user->email = $faker->unique()->email;
	        $user->password = 'test123';
	        $user->save();
        }
    }
}
