<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Illuminate\Support\Facades\Log;


class NewRestaurantForm extends Component
{
    public $name;
    public $address;
    public $owner;

    public function addNewRestaurant(){

        // Emit an event with the entered data
        $this->dispatch('newRestaurantAdded', [
            'name' => $this->name,
            'address' => $this->address,
            'owner' => $this->owner,
        ]);

        // Reset the form fields
        $this->reset(['name', 'address', 'owner']);

    }

    public function render()
    {
        return view('livewire.new-restaurant-form');
    }
}
