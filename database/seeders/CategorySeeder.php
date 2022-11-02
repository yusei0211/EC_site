<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'チェダーチーズ',
                'sort_order' => 1,
            ],
            [
                'name' => 'ゴーダ',
                'sort_order' => 2,
            ],
            [
                'name' => 'ナチュラルチーズ',
                'sort_order' => 3,
            ],
            ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'クラッカー',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ワイン',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ベリー',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'アソート',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'パーティセット',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'バター',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            ]);

    
        }
}