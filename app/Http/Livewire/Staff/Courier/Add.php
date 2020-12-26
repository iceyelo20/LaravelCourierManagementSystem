<?php

namespace App\Http\Livewire\Staff\Courier;
use App\Models\Courier;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Add extends Component
{

    public $sender_branch;
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
    public $price;

    public function render()
    {
        return view('livewire.staff.courier.add');
    }


    public function store(){
        $this->validate([
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
            'price' => 'required|numeric|gt:0',
        ]);

        // function get_guid() {
        //     $data = PHP_MAJOR_VERSION < 7 ? openssl_random_pseudo_bytes(16) : random_bytes(16);
        //     $data[6] = chr(ord($data[6]) & 0x0f | 0x40);    // Set version to 0100
        //     $data[8] = chr(ord($data[8]) & 0x3f | 0x80);    // Set bits 6-7 to 10
        //     return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        // }
        
        $reference_no = str_pad(rand(0,'9'.round(microtime(true))),11, "0", STR_PAD_LEFT); ;
    
        //Save in your database 

        $courier = new Courier();
        $courier->reference_number = $reference_no;
        $courier->sender_name = $this->sender_name;
        $courier->sender_branch = $this->sender_branch;
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
        $courier->status = 'Not Picked Yet';
        $courier->save();
        session()->flash('success','Courier Details Saved Successfully');
        $this->reset();
    }
}
