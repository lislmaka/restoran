<?php

namespace App\Http\Livewire;

use App\Models\EventOrder;
use Livewire\Component;

class ExistMenuModal extends Component
{
    public $eventId = null;
    public $event = null;

    protected $listeners = ['getParamsToExistMenuModal' => 'getParamsToExistMenuModal'];

    public function getParamsToExistMenuModal($eventId)
    {
        $this->eventId = $eventId;
    }

    public function render()
    {
        if ($this->eventId) {
            $this->event = EventOrder::find($this->eventId);
        }
        return view('livewire.exist-menu-modal');
    }
}
