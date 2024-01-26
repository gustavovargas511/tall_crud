
<div x-data="{ showNewRestaurantForm: false }">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <div class="flex justify-end bg-gray-200 dark:bg-gray-700 py-2 px-6">
            <button class="text-white p-2 rounded bg-green-500 hover:bg-green-700"
                    x-on:click="showNewRestaurantForm = true">New Restaurant</button>
        </div>
                <!-- Show Add Restaurant modal conditionally -->
        <div x-show="showNewRestaurantForm">
          @livewire('new-restaurant-form')
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Owner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurantData as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->address }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->owner }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"
                               x-on:click="showNewRestaurantForm = true"
                               wire:click="editRestaurant({{ $item }})">
                                Modify
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    wire:click="deleteRestaurant({{$item->id}})">
                                Delete
                            </button>
                        </td>

                        <!-- Add more columns based on your data -->
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>