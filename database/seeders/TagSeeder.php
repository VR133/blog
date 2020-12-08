<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [ 'tag' => 'Creative',],
            [ 'tag' => 'Elegant' ],
            [ 'tag' => 'Clean' ],
            [ 'tag' => 'Modern' ],
            [ 'tag' => 'Responsive' ],
            [ 'tag' => 'E-commerce' ],
            [ 'tag' => 'WordPress' ],
            [ 'tag' => 'Store' ],
            [ 'tag' => 'Business' ]
        ];

        foreach($tags as $tag){
            Tags::create($tag);
        }
    }
}
