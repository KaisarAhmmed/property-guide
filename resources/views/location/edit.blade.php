<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Location') }}
            </h2>

            <div class="min-w-max">
                <a href="{{route('dashboard-location.index')}}" class="fullwidth-btn">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('dashboard-location.update', $location->id)}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data"> @csrf @method('put')
                    <div class="mb-6">
                        <label class="civanoglu-label" for="name">Location <span class="required-text">*</span></label>
                        <input class="civanoglu-input" type="text" id="name" name="name" value="{{$location->name}}" required>

                        @error('name')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>



                    <button class="btn" type="submit">Update Location</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>