@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <section class="bg-[#FFF8E1] py-16 px-6 md:px-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-[#388E3C] mb-6">Tentang Kami</h2>
        </div>

        <div class="max-w-4xl mx-auto text-justify text-lg text-gray-800 leading-relaxed space-y-6">
            <p>
                <strong class="text-[#4CAF50]">Cendol Cak Salam</strong> adalah rumah dari rasa tradisional yang dibalut
                gaya kekinian. Sejak 2025, kami berdedikasi menghadirkan cendol terbaik berbahan alami – mulai dari
                santan segar, gula aren murni, hingga tepung beras premium tanpa bahan pengawet.
            </p>

            <p>
                Dengan slogan: <strong class="text-[#A1887F] italic">"Segar, Manis, Nikmat – Cendol Pas di Hati"</strong>,
                kami ingin setiap tegukan memberi kesegaran dan kebahagiaan. Cendol bagi kami bukan
                sekadar minuman, tapi <span class="font-semibold text-[#388E3C]">warisan budaya rasa</span> yang wajib
                dijaga dan dibagikan.
            </p>

            <p>
                Kami juga terus berinovasi menghadirkan varian rasa seperti <em class="text-[#795548]">Cendol Original,
                    Durian, Alpukat, Nangka, Coffee, dan Strawberry</em> yang disukai semua kalangan. Semua disajikan
                secara higienis, cepat, dan penuh cinta.
            </p>

            <p>
                Kini, <strong>Cendol Cak Salam</strong> bisa dinikmati lewat pemesanan online, event, atau outlet
                terdekat. Mari jadi bagian dari perjalanan kami dalam mengangkat minuman lokal ke level berikutnya.
            </p>

            <div class="text-center pt-6">
                <a href="/product"
                    class="inline-block bg-[#4CAF50] hover:bg-[#A1887F] text-white font-semibold py-3 px-8 rounded-full shadow-md transition duration-300">
                    Lihat Menu Kami
                </a>
            </div>
        </div>
    </section>
@endsection
