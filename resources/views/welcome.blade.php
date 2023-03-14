<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/img/hero-bg.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-xl md:text-2xl">
            <h2 class="font-bold text-3xl md:text-5xl mb-8">Find your best property,<br /> And live quality life.</h2>
            <p>We will try finding the best one for you. Please search using the form below.</p>
        </div>
    </div>

    <!-- Latest property -->
    <div class="container pt-14">
        <h2 class="section-heading">Best properties</h2>
        <div class="flex flex-wrap -mx-3 mt-10">
            @foreach($latest_properties as $property)
            <a href="{{route('single-property', $property->id)}}" class="md:w-1/3 w-full px-3 relative rounded-md mb-6 block">
                <div class="shadow-lg">
                    <div class="py-20 bg-center" style="background-image: url('/img/hero-bg.jpg')"></div>
                    <div class="p-3">
                        <h2 class="leading-0 text-base">{{$property->name}}</h2>
                        <h3 class="text-2xl py-3">{{$property->price}}</h3>
                        <div class="border-t-2">
                            <ul class="flex items-center -mx-1 my-4">
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bedrooms}} bedrooms</li>
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} bathrooms</li>
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->gross_sqm}} M<sup>2</sup></li>
                            </ul>
                            <span class="btn w-full text-center">More details</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-guest-layout>