<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="roles_name" class="block text-sm font-medium text-gray-700">
                                        {{ __('Name') }}
                                    </label>
                                    <input type="text" name="roles_name" id="roles_name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        value="{{ $role->roles_name }}" disabled>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="roles_code" class="block text-sm font-medium text-gray-700">
                                        {{ __('Role Code') }}
                                    </label>
                                    <input type="text" name="roles_code" id="roles_code"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        value="{{ $role->roles_code }}" disabled>
                                </div>

                                <div class="col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        {{ __('Description') }}
                                    </label>
                                    <textarea name="description" id="description" rows="3"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        disabled>{{ $role->description }}</textarea>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <a href="{{ route('roles.index') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Back to Roles List') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
