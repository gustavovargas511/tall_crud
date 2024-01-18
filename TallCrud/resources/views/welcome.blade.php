    <x-base-layout>
        <h1 class="text-3xl">Hola Laravel</h1>
        <div x-data="{ count: 0 }">
            <button @click="count++">Add</button>
            <span x-text="count">0</span>
        </div>
        <livewire:counter>
    </x-base-layout>
