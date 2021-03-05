<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\DishCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $countOfDishes = 1000;
        $dishCategories = DishCategory::all();

        while ($countOfDishes--) {
            $inst = new Dish();

            $name = $faker->realText(100);
            $persons = rand(1, 10);
            $quantity = rand(1, 100);

            $inst->category_id = rand(1, count($dishCategories) - 1);
            $inst->name = $name;
            $inst->slug = Str::slug($name);
            $inst->description = $faker->realText(300);
            $inst->img = rand(1, 10).'.jpg';
            $inst->price = rand(1000, 10000);
            $inst->weight = rand(100, 1000);
            $inst->min_quantity = $quantity > 50 ? 1 : 10;
            $inst->min_persons = $persons > 5 ? 1 : null;
            $inst->max_persons = $persons <= 5 ? 1 : $persons;

            $inst->save();
        }
    }
}
