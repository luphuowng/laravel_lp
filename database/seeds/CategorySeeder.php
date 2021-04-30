<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'cat_name' => 'Loại 1',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'cat_name' => 'Loại 2',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'cat_name' => 'Loại 3',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        ];
        DB::table('category')->insert($category);
    }
}
