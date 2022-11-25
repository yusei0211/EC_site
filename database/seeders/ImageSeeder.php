<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'https://res.cloudinary.com/dbxugazeh/image/upload/v1668420836/yp3ibyqbx8zufzks8jxb.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'https://res.cloudinary.com/dbxugazeh/image/upload/v1668420792/iap4cmgyqf6cbjfd3jq0.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'https://res.cloudinary.com/dbxugazeh/image/upload/v1668413739/sample.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'https://res.cloudinary.com/dbxugazeh/image/upload/v1668413766/cld-sample-4.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'https://res.cloudinary.com/dbxugazeh/image/upload/v1668413754/samples/landscapes/nature-mountains.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'https://res.cloudinary.com/dbxugazeh/image/upload/v1668413750/samples/landscapes/beach-boat.jpg',
                'title' => null
            ]]);
    }
}