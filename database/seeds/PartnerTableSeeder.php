<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // $this->call(UsersTableSeeder::class);
    	$faker = Faker::create();
    	for ($i = 0; $i < 30; $i ++ )
   		{ 		
	    	\DB::table('partners')->insert(array(
	    		'name'		=> $faker->firstName,
	    		'address'	=> $faker->secondaryAddress,
	    		'city'		=> $faker->cityPrefix,
	    		'mail'	    => $faker->unique()->email,
	    		'phone'		=> $faker->phoneNumber,
	    		'zip'		=> $faker->swiftBicNumber,
	    		'razon_s'	=> $faker->firstName,
	    		));
    	 }
    }
}
