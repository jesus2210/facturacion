<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class ProductsTableSeeder extends Seeder
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
        for ($i = 0; $i < 10; $i ++ )		
    	\DB::table('products')->insert(array(
    		'name'				=> $faker->firstName,
    		'description'		=> $faker->catchPhrase,
    		'img'				=> $faker->imageUrl(600, 600, 'food'),
    		'unit_cost'			=> $faker->randomFloat,
            'company_id'        => $company_id
    		));
    }
}
