@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section id="contact" class="py-16 px-6 md:px-20 bg-[#fdfdfd]">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#4CAF50]">Hubungi Kami</h2>
            <p class="text-gray-600 mt-2">Kami siap melayani pertanyaan, pemesanan, maupun kerja sama. Silakan hubungi kami
                melalui media berikut:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-7xl mx-auto items-center">
            <!-- Info Kontak -->
            <div class="space-y-6 text-gray-700 text-lg">
                <div class="flex items-center gap-4">
                    <i class="fab fa-facebook text-[#1877F2] text-2xl"></i>
                    <span><strong>Facebook:</strong> Cendol Cak Salam</span>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fab fa-instagram text-[#E1306C] text-2xl"></i>
                    <span><strong>Instagram:</strong> @cendolcaksalam</span>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fas fa-envelope text-[#D44638] text-2xl"></i>
                    <span><strong>Email:</strong> cendolcaksalam@gmail.com</span>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fas fa-map-marker-alt text-[#4CAF50] text-2xl"></i>
                    <span><strong>Alamat:</strong> Kramat Jati, Jakarta Timur 13510</span>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="w-full h-80 rounded-xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.246866444936!2d106.86685367587416!3d-6.232813093765781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f34d57db4ef3%3A0xe346be5dbf79cdd3!2sKramat%20Jati%2C%20Jakarta%20Timur!5e0!3m2!1sid!2sid!4v1718602764707!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection
