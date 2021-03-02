<?php

namespace App\Http\Livewire;

use App\Models\EventOrder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MainPageOrders extends Component
{
    public $eventTypes = [];

    public function render()
    {
        $this->eventTypes = EventOrder::select(DB::raw('count(id) as count, type_id'))
            ->groupBy('type_id')
            ->get();

        return view('livewire.main-page-orders');
    }
}
