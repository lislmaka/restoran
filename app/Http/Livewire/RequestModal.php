<?php

namespace App\Http\Livewire;

use App\Models\EventFormat;
use App\Models\EventOption;
use App\Models\EventStyle;
use App\Models\EventType;
use Livewire\Component;

class RequestModal extends Component
{
    public $eventFormats = [];
    public $eventFormatSelected = null;
    public $eventTypes = [];
    public $eventTypeSelected = null;
    public $eventStyles = [];
    public $eventStyleSelected = null;
    public $eventOptions = [];
    public $eventOptionsSelected = [];

    public $budget = 10000;
    public $countOfPeoples = 10;
    public $eventDate = null;
    public $eventTime = null;
    public $eventAddress = null;
    public $eventDescription = null;
    public $eventDelivery = 1;
    public $eventOwnerName = null;
    public $eventOwnerPhone = null;
    public $eventOwnerEmail = null;

    public $isOrderCreated = false;
    public $orderNumber = null;

    protected $listeners = ['requestSendParamsToModal' => 'requestGetParamsFromForm'];

    public function createOrder()
    {
        $this->isOrderCreated = true;
        $this->orderNumber = rand(100, 1000);
    }

    public function requestGetParamsFromForm($eventFormatSelected, $eventTypeSelected, $isOrderCreated)
    {
        $this->eventTypeSelected = $eventTypeSelected;
        $this->eventFormatSelected = $eventFormatSelected;
        $this->isOrderCreated = $isOrderCreated;
    }

    public function getSessionEventSearchParams()
    {
        $this->eventTypeSelected = $this->eventTypeSelected ? $this->eventTypeSelected : session('events_search.event_type_selected',
            null);
        $this->eventFormatSelected = $this->eventFormatSelected ? $this->eventFormatSelected : session('events_search.event_format_selected',
            null);
    }

    public function render()
    {
        $this->getSessionEventSearchParams();

        $this->eventFormats = EventFormat::where('active', true)->get();
        $this->eventTypes = EventType::where('active', true)->get();
        $this->eventStyles = EventStyle::where('active', true)->get();
        $this->eventOptions = EventOption::where('active', true)->get();

        return view('livewire.request-modal');
    }
}
