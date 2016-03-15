<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('CompanyTableSeeder');
        $this->call('PartnerTableSeeder');
        $this->call('ProductsTableSeeder');     
        $this->call('UserTableSeeder');
        $this->call('InvoiceLinesTableSeeder');
        $this->call('InvoicesTableSeeder');
        $this->call('PaymentsTableSeeder');
        $this->call('JournalsTableSeeder');
     
    }
}
