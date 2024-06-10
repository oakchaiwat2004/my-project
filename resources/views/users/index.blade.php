<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <center>
                    <h3>User</h3>
                </center>

                <livewire:data-table />
                <hr><br><br>


                 {{-- <center>
                    <h3>laravel-livewire</h3>
                </center>

                <livewire:user /> --}}

                {{-- @livewireScripts --}}

                <hr><br><br><br><br>


            </div>
        </div>
    </div>
</x-app-layout>
