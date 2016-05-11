<?php

use Illuminate\Database\Seeder;

use SalesPoint\Entities\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
          'name' => 'Category 1',
          'description' => 'Category 1'
        ]);

        $category = Category::create([
          'name' => 'Category 2',
          'description' => 'Category 2'
        ]);
    }
}
