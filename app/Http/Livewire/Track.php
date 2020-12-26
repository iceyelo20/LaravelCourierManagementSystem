<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Livewire\Component;

class Track extends Component
{

    public $track;
    public $status;
    public $reference_number;
    
    public function mount($track){
        $this->reference_number = $track->reference_number;
        $this->status = Status::where('reference_number', '=', $this->reference_number)->latest()->get();
    }
    public function render()
    {
        return view('livewire.track');
    }
}
