<div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => show = window.scrollY > 100)" x-show="show" x-transition.opacity x-cloak
    class="fixed bottom-6 right-6 md:right-[4.5rem] z-50">
    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="bg-gradient-to-br from-[#4CAF50] to-[#2E7D32] hover:from-[#66BB6A] hover:to-[#388E3C]
               text-white p-4 rounded-full shadow-lg transition-transform duration-200 ease-out transform hover:scale-110"
        aria-label="Scroll to top">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>
</div>
