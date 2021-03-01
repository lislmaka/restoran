<?php

namespace Database\Seeders;

use App\Models\EventOption;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $eventOptions = array(
            'Банкетный менеджер',
            'Бармен',
            'Грузчик',
            'Официант',
            'Повар',
            'Стюард (Уборщица)',
            'Хостес',
            'Мебель',
            'Посуда',
        );
        foreach ($eventOptions as $eventOption) {
            $inst = new EventOption();

            $inst->name = $eventOption;
            $inst->price = rand(1000, 10000);
            $inst->slug = Str::slug($eventOption);
            $inst->description = $faker->realText(300);

            $inst->save();
        }
    }
}
