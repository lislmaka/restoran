<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

            $inst->save();
        }
    }
}
