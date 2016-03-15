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
       $faker = Faker::create();
       $company_id = \DB::table('companies')->insertGetId(array(
                'name'      => $faker->firstName,
                'street'    => $faker->secondaryAddress,
                'street2'   => $faker->secondaryAddress,
                'city'      => $faker->cityPrefix,
                'state'     => $faker->cityPrefix,
                'country'   => $faker->cityPrefix,
                'email'     => $faker->unique()->email,
                'phone'     => $faker->phoneNumber,
                'rfc'       => $faker->swiftBicNumber,
                'zip'       => $faker->swiftBicNumber,
                ));


        // $this->call(UsersTableSeeder::class);	
        for ($i = 0; $i < 10; $i ++ )	
    	\DB::table('partners')->insert(array(
    		'name'		=> $faker->firstName,
            'street'    => $faker->secondaryAddress,
            'street2'   => $faker->secondaryAddress,
    		'num_street'=> $faker->year,
    		'city'		=> $faker->cityPrefix,
            'zip'       => $faker->swiftBicNumber,
    		'email'	    => $faker->unique()->email,
            'state'     => $faker->state,
            'country'   => $faker->country,
    		'phone'		=> $faker->phoneNumber,
            'razon_s'   => $faker->firstName,
            'rfc'       => $faker->firstName,
    		'img'    	=> $faker->image,
            'company_id'=> $company_id
    		));
    }
}
