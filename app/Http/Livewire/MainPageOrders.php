<?php

namespace App\Http\Livewire;

use App\Models\EventOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class MainPageOrders extends Component
{
    public $eventTypes = [];
    public $selectedTypeId = null;
    public $events = [];

    public function sendParamsToExistMenuModal($eventId)
    {
        $this->emit('getParamsToExistMenuModal', $eventId);
    }

    public function selectEventType($typeId)
    {
        $this->selectedTypeId = $typeId;
    }

    public function render()
    {
        $this->eventTypes = EventOrder::select(DB::raw('count(id) as count, type_id'))
            ->groupBy('type_id')
            ->get();

        $this->selectedTypeId = $this->selectedTypeId ? $this->selectedTypeId : $this->eventTypes->first()->type_id;

        $this->events = EventOrder::where('type_id', $this->selectedTypeId)->limit(4)->get();

        return view('livewire.main-page-orders');
    }
}
