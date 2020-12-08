<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'post_id' => '1',
                'tags_id' => '1'
            ],
            [
                'post_id' => '1',
                'tags_id' => '2'
            ],
            [
                'post_id' => '1',
                'tags_id' => '3'
            ],
            [
                'post_id' => '1',
                'tags_id' => '4'
            ],
            [
                'post_id' => '2',
                'tags_id' => '5'
            ],
            [
                'post_id' => '2',
                'tags_id' => '6'
            ],
            [
                'post_id' => '3',
                'tags_id' => '7'
            ],
            [
                'post_id' => '3',
                'tags_id' => '8'
            ],
            [
                'post_id' => '4',
                'tags_id' => '9'
            ],
            [
                'post_id' => '5',
                'tags_id' => '3'
            ],
            [
                'post_id' => '5',
                'tags_id' => '5'
            ],
            [
                'post_id' => '6',
                'tags_id' => '1'
            ],
        ];
        DB::table('post_tags')->insert($rows);
    }
}
