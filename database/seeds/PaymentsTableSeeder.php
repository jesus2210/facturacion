<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class PaymentsTableSeeder extends Seeder
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
	    	\DB::table('payments')->insert(array(
	    		'name'				=> $faker->firstName,
	    		'description'		=> $faker->catchPhrase,
	    		));
    	 }
    }
}
