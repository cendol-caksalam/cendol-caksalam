@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <section class="py-16 px-6 md:px-20 bg-[#fdfdfd]" x-data="cendolApp()">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#4CAF50]">Menu Varian Cendol Kami</h2>
            <p class="text-gray-600 mt-2">
                Temukan cita rasa favoritmu dari pilihan cendol spesial kami. Segar, manis, dan selalu nikmat!
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
            @php
                $menus = [
                    [
                        'name' => 'Cendol Original',
                        'desc' => 'Kesegaran klasik...',
                        'img' => '/img/cendoloriginal.jpg',
                        'bg' => 'bg-[#E8F5E9]',
                        'color' => 'text-[#2E7D32]',
                        'btn' => 'bg-[#2E7D32] hover:bg-[#1b5e20]',
                        'price' => 'Rp10.000',
                    ],
                    [
                        'name' => 'Cendol Durian',
                        'desc' => 'Aroma kuat...',
                        'img' => '/img/cendoldurian.jpg',
                        'bg' => 'bg-[#FFF8E1]',
                        'color' => 'text-[#F9A825]',
                        'btn' => 'bg-[#F9A825] hover:bg-[#f57f17]',
                        'price' => 'Rp15.000',
                    ],
                    [
                        'name' => 'Cendol Alpukat',
                        'desc' => 'Alpukat creamy...',
                        'img' => '/img/cendolalpukat.jpeg',
                        'bg' => 'bg-[#E8F5E9]',
                        'color' => 'text-[#388E3C]',
                        'btn' => 'bg-[#388E3C] hover:bg-[#2e7d32]',
                        'price' => 'Rp14.000',
                    ],
                    [
                        'name' => 'Cendol Nangka',
                        'desc' => 'Potongan buah nangka...',
                        'img' => '/img/cendolnangka.jpg',
                        'bg' => 'bg-[#FFF3E0]',
                        'color' => 'text-[#EF6C00]',
                        'btn' => 'bg-[#EF6C00] hover:bg-[#e65100]',
                        'price' => 'Rp13.000',
                    ],
                    [
                        'name' => 'Cendol Coffee',
                        'desc' => 'Sentuhan kopi premium...',
                        'img' => '/img/cendolcoffee.jpg',
                        'bg' => 'bg-[#EFEBE9]',
                        'color' => 'text-[#6D4C41]',
                        'btn' => 'bg-[#6D4C41] hover:bg-[#4e342e]',
                        'price' => 'Rp13.000',
                    ],
                    [
                        'name' => 'Cendol Strawberry',
                        'desc' => 'Rasa manis dan asam...',
                        'img' => '/img/cendolstrawberry.jpg',
                        'bg' => 'bg-[#FCE4EC]',
                        'color' => 'text-[#D81B60]',
                        'btn' => 'bg-[#D81B60] hover:bg-[#ad1457]',
                        'price' => 'Rp14.000',
                    ],
                ];
            @endphp

            @foreach ($menus as $menu)
                <div class="{{ $menu['bg'] }} rounded-2xl shadow hover:shadow-xl p-6 text-center transition duration-300">
                    <img src="{{ $menu['img'] }}" alt="{{ $menu['name'] }}"
                        class="w-28 h-28 rounded-full mx-auto object-cover mb-4 border-4 border-white shadow-md cursor-pointer"
                        @click="imageSrc = '{{ $menu['img'] }}'; imageName = '{{ $menu['name'] }}'; showModal = true">
                    <h3 class="text-xl font-bold {{ $menu['color'] }}">{{ $menu['name'] }}</h3>
                    <p class="text-gray-700 mt-2">{{ $menu['desc'] }}</p>
                    <p class="text-lg font-semibold text-gray-800 mt-3">{{ $menu['price'] }}</p>
                    <div class="mt-4 flex justify-center gap-2">
                        <button class="{{ $menu['btn'] }} text-white py-2 px-4 rounded-full transition text-sm"
                            @click="addToCart({ name: '{{ $menu['name'] }}', price: '{{ str_replace('Rp', '', $menu['price']) }}', img: '{{ $menu['img'] }}' })">
                            ➕ Pesan
                        </button>
                        <button
                            class="bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-full transition text-sm hover:bg-gray-100"
                            @click="addToCart({ name: '{{ $menu['name'] }}', price: '{{ str_replace('Rp', '', $menu['price']) }}', img: '{{ $menu['img'] }}' })">
                            🛒 + Keranjang
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal Zoom -->
        <div class="fixed top-0 left-0 w-full h-full bg-black/50 flex items-center justify-center z-50" x-show="showModal"
            x-transition x-cloak>
            <div class="bg-white p-4 rounded-lg shadow-lg relative w-80 max-w-sm">
                <button
                    class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-lg"
                    @click="showModal = false">&times;</button>
                <div class="relative">
                    <img :src="imageSrc" alt="Zoom Image" class="rounded-md w-full h-auto object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-black/60 text-white text-center py-2 rounded-b-md">
                        <span x-text="imageName"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
