<div x-data="{ open: false }" class="fixed bottom-2 md:bottom-6 left-6 z-50">
    <div class="relative w-14 h-14">

        <!-- WhatsApp -->
        <a href="https://wa.me/9811409367?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
            target="_blank"
            class="absolute left-1/2 -translate-x-1/2 bg-green-500 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-300"
            :class="open ? 'bottom-[70px] opacity-100' : 'bottom-0 opacity-0'">
            <i class="fab fa-whatsapp text-xl"></i>
        </a>

        <!-- Telegram -->
        <a href="https://t.me/your_telegram_username" target="_blank"
            class="absolute left-1/2 -translate-x-1/2 bg-blue-500 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-500 delay-100"
            :class="open ? 'bottom-[130px] opacity-100' : 'bottom-0 opacity-0'">
            <i class="fab fa-telegram text-xl"></i>
        </a>

        <!-- Instagram -->
        <a href="https://instagram.com/your_instagram_username" target="_blank"
            class="absolute left-1/2 -translate-x-1/2 bg-pink-500 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-700 delay-200"
            :class="open ? 'bottom-[190px] opacity-100' : 'bottom-0 opacity-0'">
            <i class="fab fa-instagram text-xl"></i>
        </a>

        <!-- Toggle Button -->
        <button @click="open = !open"
            class="absolute bottom-0 left-0 bg-yellow-800 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl hover:rotate-180 transition">
            <i class="fas fa-comments text-2xl"></i>
        </button>

    </div>
</div>