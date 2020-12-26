<?php

namespace App\Http\Livewire\Admin\Courier;

use Livewire\Component;
use App\Models\Courier;

class Sales extends Component
{

    public $from_date;
    public $to_date;

    public function render()
    {
        return view('livewire.admin.courier.sales');
    }

    public function find_sales(){
        $this->validate([
            'from_date' => 'required|date_format:Y-m-d|before:to_date',
            'to_date' => 'required|date_format:Y-m-d|after:from_date',
        ]);

        
        if(Courier::where('updated_at', '>=', $this->from_date)->where('updated_at', '<=', $this->to_date)->doesntExist()){
            session()->flash('fail','No Record Found');
   
         }
         else{
            
            return redirect()->route('admin.courier.report',[$this->from_date,$this->to_date]);
         }
    }
}
