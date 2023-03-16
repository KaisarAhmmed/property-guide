<x-guest-layout>
    <div class="shadow-md border-2 border-gray-300 py-8 bg-white mt-24">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="{{route('home')}}">Property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>{{$property->name}}</li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl text-gray-600">{{$property->name}}</h2>
            <h3 class="text-lg mt-2">Price: <span class="text-red-800">{{$property->price}}</span></h3>
        </div>
    </div>

    <div class="container mx-auto py-10">
        <div class="md:flex md:justify-between">
            {{-- Left Content --}}
            <div class="md:w-9/12">
                <div id="slider" class="">
                    <div class="gallery-slider mb-4">
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                    </div>

                    <div class="thumbnail-slider">
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                        <div>test</div>
                    </div>
                </div>
                {{-- Overview --}}
                <div class="md:flex justify-between items-center bg-white p-4 md:p-8 mt-10 shadow-sm">
                    <h4 class="text-lg md:w-2/12 mb-3 md:mb-0">Overview</h4>
                    <div class="md:border-l-2 md:border-gray-300 md:pl-5 md:ml-5 md:w-10/12 text-base">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus similique ab necessitatibus minus non repellendus quae ducimus odit deserunt laudantium, culpa recusandae porro? Explicabo impedit tenetur laudantium sed, culpa libero.</p>
                    </div>
                </div>

                {{-- Property Featuers --}}
                <div class="md:flex justify-between items-center bg-white p-4 md:p-8 mt-10 shadow-sm">
                    <h4 class="text-lg md:w-2/12 mb-3 md:mb-0">Property Features</h4>
                    <div class="md:ml-2 md:w-10/12 text-base md:flex flex-wrap md:flex-auto justify-between">
                        <div class="md:flex-1 md:border-l-2 md:border-gray-300 md:ml-3 mb-2 md:mb-0 md:pl-3 self-center">
                            <ul class="flex md:block">
                                <li class="flex text-sm mb-2 mr-4 md:mr-0">
                                    <div class="flex">
                                        <span class="text-sm">Type:</span>
                                    </div>
                                    <span class="ml-2 font-bold">

                                    </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><span class="text-sm">Bedrooms:</span></div>
                                    <span class="ml-2 font-bold"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="md:flex-1 md:border-l-2 md:border-gray-300 md:ml-3 mb-2 md:mb-0 md:pl-3 self-center">
                            <ul class="flex md:block">
                                <li class="flex text-sm mb-2 mr-4 md:mr-0">
                                    <div class="flex"><span class="text-sm">Bathrooms:</span></div>
                                    <span class="ml-2 font-bold"></span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><span class="text-sm">Location:</span></div>
                                    <span class="ml-2 font-bold"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>{{-- Left Content End --}}





        </div>
    </div>

</x-guest-layout>