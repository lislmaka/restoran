<?php

namespace Database\Seeders;

use App\Models\DishCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DishCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dishCategories = array(
            'Брускетта',
            'Гарнир',
            'Горячие блюда',
            'Горячие блюда фуршетные',
            'Горячие закуски',
            'Десерты',
            'Детское меню',
            'Итальянская классика',
            'Канапе',
            'Кесадилия',
            'Киши',
            'Мини-сэндвичи',
            'Пицца',
            'Праздничные блюда',
            'Профитроли',
            'Салаты',
            'Салаты фуршетные',
            'Сеты',
            'Холодные закуски',
            'Холодные закуски фуршетные',
        );
        foreach ($dishCategories as $dishCategory) {
            $inst = new DishCategory();

            $inst->name = $dishCategory;
            $inst->slug = Str::slug($dishCategory);
            $inst->description = $faker->realText(300);

            $inst->save();
        }
    }
}
