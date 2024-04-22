<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('show') }}
        </h2>
    </x-slot>

    <br><br><br>

    <div style="display: grid;text-align: center;place-item:center;">
        <h1>{{ $username }}</h1>
    </div>
    
    
</x-app-layout>