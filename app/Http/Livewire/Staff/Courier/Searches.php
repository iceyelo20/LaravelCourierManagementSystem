<?php

namespace App\Http\Livewire\Staff\Courier;

use Livewire\Component;
use App\Models\Courier; 
use App\Models\Status; 

class Searches extends Component
{
    public $search;
    public $status;
    public $reference_number;
    
    public function mount($search){
        $this->reference_number = $search->reference_number;
        $this->status = Status::where('reference_number', '=', $this->reference_number)->latest()->get();
    }
    public function render()
    {
        return view('livewire.staff.courier.searches');
    }
    
}
