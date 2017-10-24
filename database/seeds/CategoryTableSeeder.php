<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_name = array("MMO", "Simulations", "Adventure", "RTS", "Puzzle", "Action", "Stealth Shooter", "Combat", "FPS", "Sports", "RPG", "Educational");

        $x = 0;
        while ($x < 12) {
            DB::table('product_categories')->insert([
                'category_name' => $category_name[$x],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
            $x++;
        }
    }
}
