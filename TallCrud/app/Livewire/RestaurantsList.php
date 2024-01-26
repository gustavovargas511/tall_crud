<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Illuminate\Support\Facades\Log;


class RestaurantsList extends Component
{
    public $restaurantData;
    public $showNewRestaurantForm = false;
    public $editingRestaurant;

    protected $listeners = ['newRestaurantAdded' => 'addRestaurant'];

    public function mount(){
        $this->restaurantData = Restaurant::all();
    }

    public function deleteRestaurant($restaurantID){
        try {
            // Find the restaurant by ID
            $restaurant = Restaurant::findOrFail($restaurantID);

            // Delete the restaurant
            $restaurant->delete();

            // Refresh the restaurant data
            $this->restaurantData = Restaurant::all();

            // Log success
            Log::info("Deleted restaurant with ID: $restaurantID");

            // Optionally, show a success message
            //$this->emit('alert', ['type' => 'success', 'message' => 'Restaurant deleted successfully.']);
        } catch (\Exception $e) {
            // Log error
            Log::error("Error deleting restaurant with ID: $restaurantID. Error: " . $e->getMessage());

            // Optionally, show an error message
            //$this->emit('alert', ['type' => 'error', 'message' => 'Error deleting restaurant.']);
        }
    }

    public function addRestaurant($data){
        // Handle the new restaurant data received from the child component
        // For example, you can update the data in the parent component
        // or perform any other actions based on the new data
        // ...

        Restaurant::create($data);

        
        /*Log::info("Received restaurant with Name: " . $data['name']);
        Log::info("Received restaurant with Address: " . $data['address']);
        Log::info("Received restaurant with Owner: " . $data['owner']);*/


        // Close the form
        $this->showNewRestaurantForm = false;
    }

    public function editRestaurant($data)
    {
        
        $this->dispatch('editRestaurant', $data);
    }

    public function render()
    {
        return view('livewire.restaurants-list');
    }
}
