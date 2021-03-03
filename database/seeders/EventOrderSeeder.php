<?php

namespace Database\Seeders;

use App\Models\EventFormat;
use App\Models\EventOrder;
use App\Models\EventStyle;
use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $eventFormats = EventFormat::where('active', true)->count();
        $eventTypes = EventType::where('active', true)->count();
        $eventStyles = EventStyle::where('active', true)->count();

        $countOfOrders = config('site.count_of_orders', 100);

        while ($countOfOrders--) {
            $inst = new EventOrder();

            $inst->format_id = rand(1, $eventFormats);
            $inst->type_id = rand(1, $eventTypes);
            $inst->style_id = rand(1, $eventStyles);
            $inst->img = rand(1, 20).'.jpg';

            $inst->save();
        }
    }
}
