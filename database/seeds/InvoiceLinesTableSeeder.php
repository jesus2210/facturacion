<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class InvoiceLinesTableSeeder extends Seeder
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
        $product_id = \DB::table('products')->insertGetId(array(
            'name'              => $faker->firstName,
            'description'       => $faker->catchPhrase,
            'img'               => $faker->image,
            'unit_cost'         => $faker->randomFloat,
            'company_id'        => $company_id
            ));
	    for ($i = 0; $i < 10; $i ++ )  
    	\DB::table('invoice_lines')->insert(array(
    		'name'			=> $faker->firstName,
    		'description'	=> $faker->catchPhrase,
    		'unit_cost'		=> $faker->randomDigit,
    		'qty'			=> $faker->buildingNumber,
    		'total_cost'	=> $faker->randomFloat,
            'product_id'    =>$product_id
    		));
    }
}

