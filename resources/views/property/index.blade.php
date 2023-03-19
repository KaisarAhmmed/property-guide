<x-guest-layout>
    <div class="shadow-md border-2 border-gray-300 py-6 bg-white mt-24">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="{{route('properties')}}">Property</a></li>
                <li class="mx-3">></li>
                <li>
                    @if( request('type') == '0' )
                    Land
                    @elseif( request('type') == 1 )
                    Apartment
                    @elseif( request('type') == 2 )
                    Villa
                    @endif
                </li>
            </ul>
        </div>
    </div>

    <div class="container mx-auto py-10">
        <div class="md:flex md:justify-between">
            {{-- Left Content --}}
            <div class="md:w-9/12">
                <div class="flex flex-wrap">
                    @foreach($latest_properties as $property)
                    @include('components/single-property-card', ['property' => $property])
                    @endforeach

                </div>
                {{$latest_properties->links()}}

            </div>{{-- Left Content End --}}


            {{-- Sidebar --}}
            <div class="md:w-3/12 md:ml-6 mt-10 md:mt-0 vertical-search-form">
                @include('components.property-search-form', ['locations' => $locations])
            </div>
            {{-- Right Content --}}


        </div>
    </div>



</x-guest-layout>