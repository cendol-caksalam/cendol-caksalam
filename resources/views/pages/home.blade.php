@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section -->
    <section class="bg-[#4CAF50] text-white py-16 px-6 md:px-20">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-10">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">Cendol Cak Salam</h1>
                <p class="text-lg md:text-xl mb-6 font-light">"Segar, Manis, Nikmat – <strong>Cendol Pas di Hati</strong>"
                </p>
                <p class="text-md md:text-lg mb-8">
                    Nikmati kesegaran alami minuman tradisional dengan sentuhan modern.
                    Dibuat dari bahan pilihan: santan segar, gula aren murni, dan cendol kenyal yang bikin nagih.
                </p>
                <a href="/product"
                    class="inline-block bg-white text-[#4CAF50] font-semibold px-6 py-3 rounded-lg hover:bg-[#A1887F] hover:text-white transition">
                    Pesan Sekarang
                </a>
            </div>
            <div class="md:w-1/2">
                <img src="/img/cendol-segar.jpg" alt="Cendol Segar" class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
    </section>

    <!-- Keunggulan -->
    <section class="py-16 px-6 md:px-20 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#4CAF50]">Kenapa Pilih Kami?</h2>
            <p class="text-gray-600 mt-2">Lebih dari sekadar cendol – ini soal rasa dan pengalaman yang menyegarkan.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">
            <div class="p-6 border rounded-lg hover:shadow-lg transition text-center">
                <img src="/img/santan.png" alt="Bahan Segar" class="w-20 h-20 mx-auto mb-4 rounded-full object-cover">
                <h3 class="font-semibold text-lg text-[#4CAF50] mb-2">Bahan 100% Alami</h3>
                <p class="text-gray-600">Santan kelapa segar, gula aren asli, dan cendol homemade tanpa pengawet.</p>
            </div>
            <div class="p-6 border rounded-lg hover:shadow-lg transition text-center">
                <img src="/img/cendol.jpg" alt="Rasa Khas" class="w-20 h-20 mx-auto mb-4 rounded-full object-cover">
                <h3 class="font-semibold text-lg text-[#4CAF50] mb-2">Rasa Khas Nusantara</h3>
                <p class="text-gray-600">Cita rasa yang otentik, manis pas, dan bikin ketagihan di setiap seruputan.</p>
            </div>
            <div class="p-6 border rounded-lg hover:shadow-lg transition text-center">
                <img src="/img/cendol-komplit.png" alt="Layanan Cepat"
                    class="w-20 h-20 mx-auto mb-4 rounded-full object-cover">
                <h3 class="font-semibold text-lg text-[#4CAF50] mb-2">Layanan Cepat & Ramah</h3>
                <p class="text-gray-600">Pelayanan hangat & pengiriman cepat, langsung ke depan pintu Anda.</p>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="bg-[#A1887F]/10 py-16 px-6 md:px-20">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-[#4CAF50]">Kata Mereka Tentang Kami</h2>
        </div>
        <div class="max-w-4xl mx-auto grid gap-8 md:grid-cols-2">
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="italic text-gray-700">“Cendol Cak Salam paling segar yang pernah saya coba! Cocok banget buat
                    siang hari. Rasa gula arennya nendang.”</p>
                <p class="mt-4 font-bold text-[#4CAF50]">– Dina, Jakarta</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="italic text-gray-700">“Pesen lewat online, sampe cepat dan masih dingin. Enak banget buat
                    dinikmati bareng keluarga!”</p>
                <p class="mt-4 font-bold text-[#4CAF50]">– Andi, Bekasi</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-[#4CAF50] text-white text-center py-16 px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Menyegarkan Harimu?</h2>
        <p class="mb-6 text-lg">Yuk, rasakan langsung sensasi nikmatnya Cendol Cak Salam hari ini juga!</p>
        <a href="/product"
            class="bg-white text-[#4CAF50] font-semibold px-6 py-3 rounded-lg hover:bg-[#A1887F] hover:text-white transition">
            Lihat Menu
        </a>
    </section>
@endsection
