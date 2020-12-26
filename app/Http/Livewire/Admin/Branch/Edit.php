<?php

namespace App\Http\Livewire\Admin\Branch;
use App\Models\Branch; 
use Livewire\Component;
use App\Models\User;

class Edit extends Component
{
    public $branch_id;
    public $branch_name;
    public $branch_email;
    public $branch_address;
    public $branch_phone;
    public $branch_city;
    public $branch_pin;
    public $branch_password;
    public $confirm_password;

    public function mount($branch){

        $this->branch_name = $branch->branch_name;
        $this->branch_email = $branch->branch_email;
        $this->branch_address = $branch->branch_address;
        $this->branch_phone = $branch->branch_phone;
        $this->branch_city = $branch->branch_city;
        $this->branch_pin = $branch->branch_pin;
        $this->branch_id = $branch->id;

    }

    public function render()
    {
        return view('livewire.admin.branch.edit');
    }

    public function update(){
        $this->validate([
            'branch_name' => 'required|string',
            'branch_email' => 'required|email',
            'branch_phone' => 'required|string',
            'branch_address' => 'required',
            'branch_city' => 'required|string',
            'branch_pin' => 'required|string',
            'branch_password' => 'same:confirm_password',
        ]);

        $branch = Branch::find($this->branch_id);
        $user = User::find($this->branch_id + 1);
        $branch->branch_name = $this->branch_name;
        $user->name = $this->branch_name;
        $branch->branch_email = $this->branch_email;
        $user->email = $this->branch_email;
        $branch->branch_phone = $this->branch_phone;
        $branch->branch_address = $this->branch_address;
        $branch->branch_city = $this->branch_city;
        $branch->branch_pin = $this->branch_pin;
        $branch->branch_password = bcrypt($this->branch_password);
        $user->password = bcrypt($this->branch_password);
        $branch->save();
        $user->save();
        session()->flash('success','Branch Updated Successfully');
    }
}
