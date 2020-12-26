<?php

namespace App\Http\Livewire\Staff\Courier;

use Livewire\Component;
use App\Models\Courier; 
use App\Models\Status;

class Search extends Component
{
   
    public $reference_number;  
    
    public function mount(){
        $status = Status::where('reference_number', '=', $this->reference_number)->get();
    }

    public function render()
    {
        return view('livewire.staff.courier.search');
    }

    public function find(){
        $this->validate([
            'reference_number' => 'required|string',
        ]);
        if(Courier::where('reference_number', '=', $this->reference_number)->doesntExist()){
            session()->flash('fail','No Record Found');
   
         }
         else{
            return redirect()->route('staff.courier.searches',$this->reference_number);
         }
    }

}
