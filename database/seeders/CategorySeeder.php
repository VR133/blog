<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [ 'category' => 'Women',],
            [ 'category' => 'Men' ],
            [ 'category' => 'Accessories' ],
            [ 'category' => 'Bags' ],
            [ 'category' => 'Watches' ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
