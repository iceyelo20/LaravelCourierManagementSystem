<?php

namespace App\Http\Livewire\Admin\Courier;

use App\Models\Status;
use Livewire\Component;
use App\Models\Courier; 

class View extends Component
{
    public $sender_branch;
    public $reference_number;
    public $sender_name;
    public $sender_email;
    public $sender_phone;
    public $sender_address;
    public $sender_city;
    public $sender_pin;
    public $recipient_name;
    public $recipient_email;
    public $recipient_phone;
    public $recipient_address;
    public $recipient_city;
    public $recipient_pin;
    public $description;
    public $weight;
    public $status;
    public $remark;
    public $price;
    public $statuses;

    public function mount($courier){
        $this->reference_number = $courier->reference_number;
        $this->statuses = Status::where('reference_number', '=', $this->reference_number)->latest()->get();
        $this->sender_branch = $courier->sender_branch;
        $this->sender_name = $courier->sender_name;
        $this->sender_email = $courier->sender_email;
        $this->sender_phone = $courier->sender_phone;
        $this->sender_address = $courier->sender_address;
        $this->sender_city = $courier->sender_city;
        $this->sender_pin = $courier->sender_pin;
        $this->recipient_name = $courier->recipient_name;
        $this->recipient_email = $courier->recipient_email;
        $this->recipient_phone = $courier->recipient_phone;
        $this->recipient_address = $courier->recipient_address;
        $this->recipient_city = $courier->recipient_city;
        $this->recipient_pin = $courier->recipient_pin;
        $this->description = $courier->description;
        $this->weight = $courier->weight;
        $this->price = $courier->price;
        $this->status = $courier->status;

    }

   
    public function render()
    {
        return view('livewire.admin.courier.view');
    }

}
