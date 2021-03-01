<?php

namespace Database\Seeders;

use App\Models\EventStyle;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $eventStyles = array(
            'Хотим хорошо поесть',
            'Легкие закуски',
            'Все по высшему разряду',
        );
        foreach ($eventStyles as $eventStyle) {
            $inst = new EventStyle();

            $inst->name = $eventStyle;
            $inst->slug = Str::slug($eventStyle);
            $inst->description = $faker->realText(300);

            $inst->save();
        }
    }
}
