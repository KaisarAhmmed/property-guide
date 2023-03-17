<div class="fixed top-0 w-full py-4 px-4 md:px-12 flex justify-between items-center z-30 sticky-header {{ request()->routeIs('home') ? '' : 'general-header' }}">
    <div class="min-w-max mr-8 md:mr-0">
        <a href="{{route('home')}}">
            <h1 class="font-bold text-xl uppercase text-white">Property Guide</h1>
        </a>
    </div>

    <div class="w-full absolute top-24 left-0 bg-white md:bg-transparent md:relative md:top-0 civanoglu-menu-items">
        <ul class="md:flex justify-center">
            <li><a class="block md:inline-block px-4 py-2 md:py-4 text-white" href="{{route('properties')}}?type=0">Land</a></li>
            <li><a class="block md:inline-block px-4 py-2 md:py-4 text-white" href="{{route('properties')}}?type=2">{{__('Villa')}}</a></li>
            <li><a class="block md:inline-block px-4 py-2 md:py-4 text-white" href="{{route('properties')}}?type=1">Apartment</a></li>
            <li><a class="block md:inline-block px-4 py-2 md:py-4 text-white" href="">About Us</a></li>
            <li><a class="block md:inline-block px-4 py-2 md:py-4 text-white" href="">Contact Us</a></li>
        </ul>
    </div>

    <div class="min-w-max mr-4 md:mr-10 text-2xl">
        <a class="inline-block mr-5 text-white" href="">$</a>
        <a class="inline-block mr-5 text-white" href="">₺</a>
    </div>

    <div class="min-w-max text-3xl">
        <a href="">🇺🇸</a>
        <a href="">🇹🇷</a>
    </div>

    <div class="min-w-max ml-10 md:hidden">
        <button class="civanoglu-menu">
            <i class="text-white" data-feather="menu"></i>
        </button>
    </div>
</div>