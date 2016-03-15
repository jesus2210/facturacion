<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class InvoicesTableSeeder extends Seeder
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
        $payment_id = \DB::table('payments')->insertGetId(array(
                'name'              => $faker->firstName,
                'description'       => $faker->catchPhrase,
                ));
        $journal_id = \DB::table('journals')->insertGetId(array(
                'name'      => $faker->firstName,
                'code'      => $faker->catchPhrase,
                ));
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

        $partner_id = \DB::table('partners')->insertGetId(array(
                'name'      => $faker->firstName,
                'street'    => $faker->secondaryAddress,
                'street2'   => $faker->secondaryAddress,
                'num_street'=> $faker->year,
                'city'      => $faker->cityPrefix,
                'zip'       => $faker->swiftBicNumber,
                'email'     => $faker->unique()->email,
                'state'     => $faker->state,
                'country'   => $faker->country,
                'phone'     => $faker->phoneNumber,
                'razon_s'   => $faker->firstName,
                'rfc'       => $faker->firstName,
                'img'       => $faker->image,
                'company_id'=> $company_id
                ));
        for ($i = 0; $i < 10; $i ++ ) 
    	\DB::table('invoices')->insert(array(
    		'invoice_number'=> $faker->randomDigit,
    		'date'			=> $faker->date,
    		'subtotal'		=> $faker->randomFloat,
    		'amount_total'	=> $faker->randomFloat,
            'description'   => $faker->catchPhrase,
    		'state'	        => $faker->catchPhrase,
            'payment_id'    => $payment_id,
            'partner_id'    => $partner_id,
            'journal_id'    => $journal_id,
            'company_id'    => $company_id
    		));
    }
}
