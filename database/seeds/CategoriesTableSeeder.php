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
        $categories = ['General', 'Business', 'Politics', 'Health', 'Arts & Life', 'Religion', 'Editorial', 'Opinion', 'Environment', 'Sports'];
        foreach ($categories as $key => $value) {
            DB::table('categories')->insert([
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


    }
}
