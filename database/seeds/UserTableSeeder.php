<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $faker = Faker::create();
    	for ($i = 0; $i < 30; $i ++ )
   		{ 		
	    	\DB::table('users')->insert(array(
	    		'name'		=> $faker->firstName,
	    		'company'	=> $faker->company,
	    		'password'	=> $faker->password,
	    		'email'	    => $faker->unique()->email,
	    		));
    	 }
    }
}
