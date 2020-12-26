<?php

namespace App\Http\Livewire\Staff\Courier;

use App\Models\Status;
use Livewire\Component;
use App\Models\Courier; 

class Edit extends Component
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
        return view('livewire.staff.courier.edit');
    }

    public function update(){
        $this->validate([
            'reference_number' => 'required|string',
            'sender_branch' => 'required|string',
            'sender_name' => 'required|string',
            'recipient_name' => 'required|string',
            'sender_email' => 'required|email',
            'recipient_email' => 'required|email',
            'sender_address' => 'required',
            'recipient_address' => 'required',
            'sender_city' => 'required',
            'recipient_city' => 'required',
            'sender_pin' => 'required',
            'recipient_pin' => 'required',
            'sender_phone' => 'required|string',
            'recipient_phone' => 'required|string',
            'description' => 'required|string',
            'weight' => 'required|string',
            'remark' => 'required|string',
            'status' => 'required|string',
            'price' => 'required|numeric|gt:0',
        ]);


        if (Status::where('reference_number', '=', $this->reference_number)->where('remark', '=', $this->remark)->where('status', '=', $this->status)->exists()) {

            session()->flash('fail','Already Existed');
            
        }
        else if($this->status < 1){
            Status::where('reference_number', '=', $this->reference_number)->where('status', '>', $this->status)->delete();
            session()->flash('success','Status Updated Successfully');

        }
        
        else{
        //Update into Courier Database
        
        $courier = Courier::where('reference_number', '=', $this->reference_number)->first();
        $courier->reference_number = $this->reference_number;
        $courier->sender_branch = $this->sender_branch;
        $courier->sender_name = $this->sender_name;
        $courier->sender_email = $this->sender_email;
        $courier->sender_phone = $this->sender_phone;
        $courier->sender_address = $this->sender_address;
        $courier->sender_city = $this->sender_city;
        $courier->sender_pin = $this->sender_pin;
        $courier->recipient_name = $this->recipient_name;
        $courier->recipient_email = $this->recipient_email;
        $courier->recipient_phone = $this->recipient_phone;
        $courier->recipient_address = $this->recipient_address;
        $courier->recipient_city = $this->recipient_city;
        $courier->recipient_pin = $this->recipient_pin;
        $courier->description = $this->description;
        $courier->weight = $this->weight;
        $courier->price = $this->price;
        $courier->status = $this->status;
        $courier->save();

        //Save into Status Database
        $status = new Status();
        $status->reference_number = $this->reference_number;
        $status->sender_name = $this->sender_name;
        $status->sender_branch = $this->sender_branch;
        $status->sender_email = $this->sender_email;
        $status->sender_phone = $this->sender_phone;
        $status->sender_address = $this->sender_address;
        $status->sender_city = $this->sender_city;
        $status->sender_pin = $this->sender_pin;
        $status->recipient_name = $this->recipient_name;
        $status->recipient_email = $this->recipient_email;
        $status->recipient_phone = $this->recipient_phone;
        $status->recipient_address = $this->recipient_address;
        $status->recipient_city = $this->recipient_city;
        $status->recipient_pin = $this->recipient_pin;
        $status->description = $this->description;
        $status->weight = $this->weight;
        $status->remark = $this->remark;
        $status->status = $this->status;
        
        //for editing status
        Status::where('reference_number', '=', $this->reference_number)->where('status', '>=', $this->status)->delete();
        //not equal
        
        $status->save();
        redirect()->route('staff.courier.edit',$this->reference_number);
        session()->flash('success','Courier Updated Successfully');
   
        }
    }
}
