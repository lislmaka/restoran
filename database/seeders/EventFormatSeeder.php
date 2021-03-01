<?php

namespace Database\Seeders;

use App\Models\EventFormat;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $eventFormats = array(
            'Банкет',
            'Барбекю',
            'Выездной банкет',
            'Выездной фуршет',
            'Кофе-брейк',
            'Фуршет',
        );
        foreach ($eventFormats as $eventFormat) {
            $inst = new EventFormat();

            $inst->name = $eventFormat;
            $inst->slug = Str::slug($eventFormat);
            $inst->description = $faker->realText(300);

            $inst->save();
        }
    }
}
