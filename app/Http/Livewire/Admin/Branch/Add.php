<?php

namespace App\Http\Livewire\Admin\Branch;
use Livewire\Component;
use App\Models\Branch;
use App\Models\User;

class Add extends Component
{
    public $role_id;
    public $branch_name;
    public $branch_email;
    public $branch_address;
    public $branch_phone;
    public $branch_city;
    public $branch_pin;
    public $branch_password;
    public $confirm_password;

    public function render()
    {
        return view('livewire.admin.branch.add');
    }

    public function store(){
        $this->validate([
            'branch_name' => 'required|string',
            'branch_email' => 'required|email',
            'branch_phone' => 'required|string',
            'branch_address' => 'required',
            'branch_city' => 'required|string',
            'branch_pin' => 'required|string',
            'branch_password' => 'min:8|string|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:8|string'
        ]);

        $branch = new Branch();
        $user = new User();
        $branch->role_id = 2;
        $user->role_id = 2;
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
        session()->flash('success','Branch Aded Successfully');
        $this->reset();
    }
}
