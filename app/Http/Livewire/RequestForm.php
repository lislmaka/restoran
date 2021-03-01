<?php

namespace App\Http\Livewire;

use App\Models\EventFormat;
use App\Models\EventType;
use Livewire\Component;

class RequestForm extends Component
{
    public $eventFormats = [];
    public $eventFormatSelected = '';
    public $eventTypes = [];
    public $eventTypeSelected = '';
    public $isOrderCreated = false;

    public function requestSendParamsToModal()
    {
        $this->emit('requestSendParamsToModal', $this->eventFormatSelected, $this->eventTypeSelected, $this->isOrderCreated);
    }

    public function setSessionEventTypeSelected()
    {
        session(['events_search.event_type_selected' => $this->eventTypeSelected]);
    }

    public function setSessionEventFormatSelected()
    {
        session(['events_search.event_format_selected' => $this->eventFormatSelected]);
    }

    public function getSessionEventSearchParams()
    {
        $this->eventTypeSelected = $this->eventTypeSelected ? $this->eventTypeSelected : session('events_search.event_type_selected', null);
        $this->eventFormatSelected = $this->eventFormatSelected ? $this->eventFormatSelected : session('events_search.event_format_selected', null);
    }

    public function render()
    {
        $this->getSessionEventSearchParams();

        $this->eventFormats = EventFormat::where('active', true)->get();
        $this->eventTypes = EventType::where('active', true)->get();

        return view('livewire.request-form');
    }
}
