@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <section id="services" class="py-16 px-6 md:px-20 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#4CAF50]">Layanan Kami</h2>
            <p class="text-gray-600 mt-2">
                Kami hadir untuk memberikan pengalaman terbaik menikmati cendol favoritmu, kapan pun dan di mana pun.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
            <!-- Layanan 1 -->
            <div class="bg-[#E8F5E9] p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="text-[#2E7D32] text-4xl mb-4">🚚</div>
                <h3 class="text-xl font-semibold text-[#2E7D32] mb-2">Layanan Antar</h3>
                <p class="text-gray-700">Nikmati kesegaran cendol tanpa harus keluar rumah. Pesan sekarang dan kami antar ke
                    lokasi Anda!</p>
            </div>

            <!-- Layanan 2 -->
            <div class="bg-[#FFF8E1] p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="text-[#F9A825] text-4xl mb-4">🎁</div>
                <h3 class="text-xl font-semibold text-[#F9A825] mb-2">Paket Cendol Custom</h3>
                <p class="text-gray-700">Buat sendiri paket cendolmu sesuai selera! Cocok untuk hampers, ulang tahun, dan
                    acara spesial lainnya.</p>
            </div>

            <!-- Layanan 3 -->
            <div class="bg-[#E3F2FD] p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="text-[#1976D2] text-4xl mb-4">📦</div>
                <h3 class="text-xl font-semibold text-[#1976D2] mb-2">Pre-Order & Catering</h3>
                <p class="text-gray-700">Terima pesanan dalam jumlah besar untuk berbagai event seperti kantor, sekolah,
                    pengajian, dan pesta keluarga.</p>
            </div>

            <!-- Layanan 4 -->
            <div class="bg-[#FCE4EC] p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="text-[#D81B60] text-4xl mb-4">📱</div>
                <h3 class="text-xl font-semibold text-[#D81B60] mb-2">Pesan Online Mudah</h3>
                <p class="text-gray-700">Dengan sistem pemesanan online kami, cukup pilih menu favorit, bayar, dan duduk
                    manis tunggu cendol datang!</p>
            </div>

            <!-- Layanan 5 -->
            <div class="bg-[#FFF3E0] p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="text-[#FB8C00] text-4xl mb-4">💼</div>
                <h3 class="text-xl font-semibold text-[#FB8C00] mb-2">Kemitraan / Franchise</h3>
                <p class="text-gray-700">Ingin bergabung sebagai mitra Cendol Cak Salam? Yuk buka usaha bareng kami dan
                    dapatkan keuntungan menarik!</p>
            </div>

            <!-- Layanan 6 -->
            <div class="bg-[#F3E5F5] p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="text-[#8E24AA] text-4xl mb-4">💬</div>
                <h3 class="text-xl font-semibold text-[#8E24AA] mb-2">Customer Support</h3>
                <p class="text-gray-700">Kami siap membantu setiap pertanyaan, kritik, atau saran lewat WhatsApp, Instagram,
                    atau email resmi kami.</p>
            </div>
        </div>
    </section>
@endsection
