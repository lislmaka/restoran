<?php

namespace Database\Seeders;

use App\Models\EventType;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $eventTypes = array(
            'Вечеринка',
            'Выставка',
            'Деловой завтрак',
            'Деловой обед',
            'День рождения',
            'Детский праздник',
            'Конференция',
            'Корпоратив',
            'Свадьба',
            'Юбилей',
        );
        foreach ($eventTypes as $eventType) {
            $inst = new EventType();

            $inst->name = $eventType;
            $inst->slug = Str::slug($eventType);
            $inst->description = $faker->realText(300);

            $inst->save();
        }
    }
}
