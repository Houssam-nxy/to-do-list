<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Today') }}
        </h2>
    </x-slot>


    <div class="py-12">

        @foreach ($namelist as $id => $name)
            
        <!-- start -->
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between items-center bg-white hover:bg-slate-600 hover:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        {{ $id }} - {{ $name }}
                    </div>
                    <div class="flex p-6 space-x-2">
                        <a href="{{ Route('todo.show', $id) }}"><button class="w-16 h-10 rounded-md bg-blue-500 text-white hover:bg-blue-600">Show</button></a>
                        <a href="{{ route('todo.destroy', $id) }}"><button class="w-16 h-10 rounded-md bg-red-500 text-white hover:bg-red-600">Delete</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card item -->

        @endforeach

        <!-- start -->
        
        <!-- end card item -->
    </div>

    

    
</x-app-layout>