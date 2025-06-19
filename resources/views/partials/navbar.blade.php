@php
    $menus = [
        ['label' => 'Home', 'href' => '/', 'match' => '/'],
        ['label' => 'About', 'href' => '/about', 'match' => 'about'],
        ['label' => 'Product', 'href' => '/product', 'match' => 'product'],
        ['label' => 'Services', 'href' => '/services', 'match' => 'services'],
        ['label' => 'Contact', 'href' => '/contact', 'match' => 'contact'],
    ];
@endphp

<nav class="bg-[#e8f5e9]/30 backdrop-blur-lg border-b-4 border-[#43a047] fixed w-full z-50 shadow-md"
    x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-24 items-center justify-between">
            <!-- Logo & Brand -->
            <div class="flex items-center">
                <img class="h-16 w-16 rounded-full border-3 border-[#2e7d32]" src="{{ asset('img/logo_cendol.png') }}"
                    alt="Cendol Cak Salam" />
                <span class="ml-3 text-2xl font-bold text-[#2e7d32]">Cendol Cak Salam</span>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden md:flex space-x-6">
                @foreach ($menus as $menu)
                    @include('partials.nav-link', [
                        'href' => $menu['href'],
                        'active' => request()->is($menu['match']),
                        'label' => $menu['label'],
                    ])
                @endforeach
            </div>

            <!-- Profile + Mobile Button -->
            <div class="flex items-center space-x-4">
                <!-- Profile -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center focus:outline-none">
                        <img class="h-12 w-12 rounded-full border-3 border-[#66bb6a]" src="{{ asset('img/fp1.jpg') }}"
                            alt="Profile" />
                    </button>
                    <div x-show="open" @click.outside="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black/5 py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#c8e6c9]">Your
                            Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#c8e6c9]">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100">Sign Out</a>
                    </div>
                </div>

                <!-- Mobile Hamburger -->
                <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none">
                    <svg x-show="!isOpen" class="h-6 w-6 text-green-800" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="isOpen" class="h-6 w-6 text-green-800" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" class="md:hidden bg-white border-t border-green-300 shadow-md">
        <div class="px-4 py-3 space-y-2">
            @foreach ($menus as $menu)
                @include('partials.nav-link', [
                    'href' => $menu['href'],
                    'active' => request()->is($menu['match']),
                    'label' => $menu['label'],
                ])
            @endforeach
        </div>

        <!-- Mobile Profile Info -->
        <div class="border-t border-gray-200 px-4 py-3">
            <div class="flex items-center space-x-3">
                <img class="h-10 w-10 rounded-full border" src="{{ asset('img/fp1.jpg') }}" alt="User" />
                <div>
                    <p class="text-sm font-semibold text-green-900">Abdur Rosyid Fachriansyah</p>
                    <p class="text-sm text-gray-500">cendolcaksalam@gmail.com</p>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="#" class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-100 rounded-md">Your
                    Profile</a>
                <a href="#"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-100 rounded-md">Settings</a>
                <a href="#" class="block px-3 py-2 text-sm text-red-600 hover:bg-red-100 rounded-md">Sign Out</a>
            </div>
        </div>
    </div>
</nav>
