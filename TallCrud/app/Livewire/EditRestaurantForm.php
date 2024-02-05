<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;


class EditRestaurantForm extends Component
{

    public $name = '';
    public $address = '';
    public $owner = '';
    protected $listeners = ['editRestaurant' => 'setDataToEdit'];


    public function setDataToEdit($data)
    {
        
        $this->name = $data['name'];
        $this->address = $data['address'];
        $this->owner = $data['owner'];

        // Emit an event with the entered data
        /* $this->dispatch('editRestaurant', [
            'name' => $this->name,
            'address' => $this->address,
            'owner' => $this->owner,
        ]);

        // Reset the form fields
        $this->reset(['name', 'address', 'owner']);*/
    }

    public function updateRestaurant(){
        Log::info('Editing restaurant:'. $this->name);
        Log::info('Editing restaurant:'. $this->address); 
        Log::info('Editing restaurant:'. $this->owner);      
    }

    public function render()
    {
        return view('livewire.edit-restaurant-form');
    }
}
