<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Form extends Component
{
    public $name, $tel_no, $address, $state,$country='Malaysia';

    //validation
    protected $rules = [
        'name' => 'required|min:3',
        'tel_no' => 'required',
        'state' => 'required',
    ];

    public function store(){
        $this->validate();
        // Create a new instance of YourModel
        $model = new Customer();

        // Manually assign each attribute
        $model->name = $this->name;
        $model->tel_no = $this->tel_no;
        $model->address = $this->address;
        $model->state = $this->state;
        $model->country = $this->country;

        // Save the model to the database
        $model->save();
    }

    public function edit(){
        
    }

    public function render()
    {
        return view('livewire.customers.form');
    }
}
