<?php

namespace App\Http\Livewire\Admin\Courier;

use Livewire\Component;

class Report extends Component
{

    public $courier;


    public function render()
    {
        return view('livewire.admin.courier.report');
    }
}
