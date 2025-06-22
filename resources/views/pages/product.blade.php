@extends('layouts.app')

@section('title', $title)

@section('content')
    <section class="py-16 px-6 md:px-20 bg-[#fdfdfd]" x-data="cendolApp()">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#4CAF50]">Menu Varian Cendol Kami</h2>
            <p class="text-gray-600 mt-2">Temukan cita rasa favoritmu dari pilihan cendol spesial kami. Segar, manis, dan
                selalu nikmat!</p>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto">
            @forelse ($menu as $item)
                <div class="rounded-2xl shadow-md hover:shadow-lg transition p-6 text-center {{ $item->bg }}">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <img src="{{ $item->img }}" alt="{{ $item->name }}"
                            class="w-full h-full object-cover cursor-pointer"
                            @click="imageSrc = '{{ $item->img }}'; imageName = '{{ $item->name }}'; showModal = true">
                    </div>
                    <h3 class="text-xl font-semibold {{ $item->color }}">{{ $item->name }}</h3>
                    <p class="text-gray-700 mt-2 line-clamp-3">{{ $item->desc }}</p>
                    <p class="text-lg font-bold text-gray-800 mt-3">{{ $item->price }}</p>
                    <div class="mt-4">
                        <button
                            class="{{ $item->btn }} text-white py-2 px-6 rounded-full text-sm shadow-md transition duration-300 ease-in-out"
                            @click="lastItem = { name: '{{ $item->name }}', price: '{{ str_replace('Rp', '', $item->price) }}', img: '{{ $item->img }}' };')">
                            ➕ Pesan
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">Belum ada produk tersedia.</div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <button
                class="bg-white border border-green-400 text-green-600 hover:bg-green-500 hover:text-white py-2 px-6 rounded-full transition text-sm shadow"
                @click="if (lastItem) { cart.push(lastItem); alert(`${lastItem.name} ditambahkan ke keranjang!`); lastItem = null; } else { alert('Pilih produk dulu dengan ➕ Pesan'); }">
                🛒 Tambah ke Keranjang (<span x-text="cart.length" class="font-semibold"></span>)
            </button>
        </div>

        <!-- Modal Zoom dengan Glow -->
        <div class="fixed inset-0 z-50 bg-black/60 flex items-center justify-center px-4 overflow-y-auto" x-show="showModal"
            x-transition x-cloak>
            <div class="modal-glow max-w-sm w-full">

                <!-- Tombol Close -->
                <button
                    class="absolute top-3 right-3 w-8 h-8 flex items-center justify-center bg-red-500 text-white text-lg rounded-full hover:bg-red-600 focus:outline-none"
                    @click="showModal = false" aria-label="Close">
                    &times;
                </button>

                <!-- Gambar Produk -->
                <img :src="imageSrc" :alt="imageName"
                    class="w-full h-auto object-contain rounded-md max-h-[60vh] mx-auto">

                <!-- Nama Produk -->
                <div class="mt-4 text-center font-semibold text-gray-800 text-lg" x-text="imageName"></div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function cendolApp() {
            return {
                cart: [],
                lastItem: null,
                imageSrc: '',
                imageName: '',
                showModal: false,
            }
        }
    </script>
@endpush
