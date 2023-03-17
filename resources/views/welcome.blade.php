<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/img/hero-bg.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-xl md:text-2xl">
            <h2 class="font-bold text-3xl md:text-5xl mb-8">Find your best property,<br /> And live quality life.</h2>
            <p>We will try finding the best one for you. Please search using the form below.</p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-20 md:-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg home-search">
                @include('components.property-search-form')
            </div>
        </div>
    </div>

    <!-- Latest property -->
    <div class="container pt-14">
        <h2 class="section-heading">Best properties</h2>
        <div class="flex flex-wrap -mx-3 mt-10">
            @foreach($latest_properties as $property)
            @include('components/single-property-card', ['property' => $property])
            @endforeach
        </div>
    </div>
</x-guest-layout>