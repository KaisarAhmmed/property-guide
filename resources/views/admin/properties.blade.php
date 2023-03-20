<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Properties') }}
            </h2>
            <a href="{{route('add-property')}}" class="bg-gray-800 text-white px-6 py-2 text-sm rounded">Add New Property</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full table-auto mb-6">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Location</th>
                                <th class="border px-4 py-2">Price</th>
                                <th class="border px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($properties as $property)
                            <tr>
                                <td class="border px-4 py-2">{{$property->name}}</td>
                                <td class="border px-4 py-2">{{$property->location->name}}</td>
                                <td class="border px-4 py-2">{{$property->price}}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a href="{{route('edit-property', $property->id)}}" class="bg-blue-500 text-white px-2 py-2 text-sm rounded">Edit</a>
                                    <a href="" class="bg-green-500 text-white px-2 py-2 text-sm rounded">View</a>
                                    <a href="" class="bg-red-500 text-white px-2 py-2 text-sm rounded">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$properties->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>