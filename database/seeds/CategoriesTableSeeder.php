<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['general', 'business', 'politics', 'health', 'arts & life', 'religion', 'editorial', 'opinion', 'environment', 'sports'];
        foreach ($categories as $key => $value) {
            DB::table('categories')->insert([
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


    }
}
