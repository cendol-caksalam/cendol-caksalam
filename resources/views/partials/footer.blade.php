<!-- resources/views/components/footer.blade.php -->
<footer class="bg-[#f8fafc] text-gray-700 py-10 mt-16 border-t border-gray-200">
    <div class="max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        
        <!-- Info Toko -->
        <div>
            <h4 class="text-lg font-semibold mb-2 text-green-700">Cendol Cak Salam</h4>
            <p class="text-sm">Kramat Jati, Jakarta Timur</p>
            <p class="text-sm mt-1">Buka Setiap Hari: 10.00 - 17.00 WIB</p>
        </div>

        <!-- Sosial Media -->
        <div>
            <h4 class="text-lg font-semibold mb-2 text-green-700">Ikuti Kami</h4>
            <div class="flex justify-center md:justify-start gap-4 mt-3 text-2xl">
                <a href="https://facebook.com/cendolcaksalam" target="_blank" class="text-blue-600 hover:text-blue-800" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com/cendolcaksalam" target="_blank" class="text-pink-500 hover:text-pink-700" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="text-green-500 hover:text-green-700" aria-label="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="mailto:info@cendolcaksalam.com" class="text-red-500 hover:text-red-700" aria-label="Email">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>

        <!-- Hak Cipta -->
        <div>
            <h4 class="text-lg font-semibold mb-2 text-green-700">Hak Cipta</h4>
            <p class="text-sm">&copy; {{ date('Y') }} Cendol Cak Salam.</p>
            <p class="text-sm">All rights reserved.</p>
        </div>
    </div>
</footer>
