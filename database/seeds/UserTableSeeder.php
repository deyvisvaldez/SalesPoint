<?php

use Illuminate\Database\Seeder;

use SalesPoint\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'firstname' => 'Deyvis',
          'lastname' => 'Valdez Huanca',
          'dni' => '70551148',
          'email'     => 'deyvis.vh@gmail.com',
          'password'  => '123456'
        ]);
    }
}
