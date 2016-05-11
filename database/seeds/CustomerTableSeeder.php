<?php

use Illuminate\Database\Seeder;

use SalesPoint\Entities\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::create([
          'firstname' => 'Peter',
          'lastname' => 'Parker',
          'dni' => '00076234'
        ]);

        $customer = Customer::create([
          'firstname' => 'Tony',
          'lastname' => 'Stark',
          'dni' => '00873276'
        ]);
    }
}
