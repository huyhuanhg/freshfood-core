<?php

namespace Database\Seeders;

use App\Models\FoodTag;
use Illuminate\Database\Seeder;

class FoodTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodTags = [
            [
                'tag_name' => "Đồ ăn",
                'tag_description' => "Đồ ăn",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Đồ uống",
                'tag_description' => "Đồ uống",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Đồ chay",
                'tag_description' => "Đồ chay",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Bánh kem",
                'tag_description' => "Bánh kem",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Tráng miệng",
                'tag_description' => "Tráng miệng",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Sushi",
                'tag_description' => "Sushi",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Món lẩu",
                'tag_description' => "Món lẩu",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Mì phở",
                'tag_description' => "Mì phở",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Cơm hộp",
                'tag_description' => "Cơm hộp",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Món gà",
                'tag_description' => "Món gà",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Pizza/Burger",
                'tag_description' => "Pizza/Burger",
                'tag_active' => 1,
            ],
            [
                'tag_name' => "Homemade",
                'tag_description' => "Homemade",
                'tag_active' => 1,
            ],
        ];


        foreach ($foodTags as $foodTag) {
            $tag = new FoodTag();
            foreach ($foodTag as $key => $value) {
                $tag->$key = $value;
            }
            $tag->save();
        }
    }
}
