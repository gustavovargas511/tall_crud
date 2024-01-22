<div class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <!-- Modal content -->
    <div class="bg-white p-8 rounded shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-4">Insert New Restaurant</h2>

        <!-- Your form goes here -->
        <form wire:submit='addNewRestaurant'>
            <!-- Form fields -->
            <!-- Example: -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Restaurant Name:</label>
                <input wire:model='name' type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Restaurant Address:</label>
                <input wire:model='address' type="text" id="address" name="address" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <label for="owner" class="block text-sm font-medium text-gray-700">Restaurant Owner Name:</label>
                <input wire:model='owner' type="text" id="owner" name="owner" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Add other form fields as needed -->

            <!-- Submit button -->
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</div>