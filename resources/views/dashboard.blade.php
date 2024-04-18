<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">

        <!-- start -->
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between items-center bg-white hover:bg-slate-600 hover:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        My itme 1
                    </div>
                    <div class="flex p-6 space-x-2">
                        <button class="w-16 h-10 rounded-md bg-blue-500 text-white hover:bg-blue-600">Show</button>
                        <button class="w-16 h-10 rounded-md bg-red-500 text-white hover:bg-red-600">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card item -->

        <!-- start -->
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between items-center bg-white hover:bg-slate-600 hover:text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        My itme 2
                    </div>
                    <div class="flex p-6 space-x-2">
                        <button class="w-16 h-10 rounded-md bg-blue-500 text-white hover:bg-blue-600">Show</button>
                        <button class="w-16 h-10 rounded-md bg-red-500 text-white hover:bg-red-600">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card item -->
    </div>

</x-app-layout>
