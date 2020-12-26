<?php

namespace App\Http\Livewire;

use App\Models\Status;
use App\Models\Courier;
use Livewire\Component;

class Welcome extends Component
{

    public $reference_number;  
    
    public function mount(){
        $status = Status::where('reference_number', '=', $this->reference_number)->get();
    }

    public function render()
    {
        return view('livewire.welcome');
    }

    public function user_search(){
        $this->validate([
            'reference_number' => 'required|string',
        ]);
        if(Courier::where('reference_number', '=', $this->reference_number)->doesntExist()){
            session()->flash('fail','No Record Found');
   
         }
         else{
            return redirect()->route('track',$this->reference_number);
         }
    }
}
