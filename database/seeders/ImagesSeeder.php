<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'post_id' => '1',
                'image' => 'image1.jpg'
            ],
            [
                'post_id' => '1',
                'image' => 'image2.jpg'
            ],
            [
                'post_id' => '2',
                'image' => 'image3.jpg'
            ],
            [
                'post_id' => '3',
                'image' => 'image4.jpg'
            ],
            [
                'post_id' => '4',
                'image' => 'image5.jpg'
            ],
            [
                'post_id' => '5',
                'image' => 'image6.jpg'
            ],
        ];

        foreach ($images as $image) {
            Images::create($image);
        }
    }
}
