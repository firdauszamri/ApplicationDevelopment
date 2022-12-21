<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('rooms.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Venue</a>
            </div>
            
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Venue Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Location
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $room -> name }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $room -> location }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $room -> status ->name }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                    <div class="flex space-x-2">
                        <a href="{{ route('rooms.edit', $room->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                        method="POST" 
                        action="{{ route('rooms.destroy',$room->id) }}"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>