<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class CompanyTableSeeder extends Seeder
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
	    	\DB::table('companies')->insert(array(
	    		'name'		=> $faker->firstName,
	    		'address'	=> $faker->secondaryAddress,
	    		'street'	=> $faker->secondaryAddress,
	    		'street2'	=> $faker->secondaryAddress,
	    		'city'		=> $faker->cityPrefix,
	    		'state'		=> $faker->cityPrefix,
	    		'country'	=> $faker->cityPrefix,
	    		'email'	    => $faker->unique()->email,
	    		'phone'		=> $faker->phoneNumber,
	    		'tax'		=> $faker->swiftBicNumber,
	    		'fax'		=> $faker->phoneNumber,
	    		));
    	 }
    }
}
