import './bootstrap';
import '../css/app.css';

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';   // ✅ correct CSS path

const swiper = new Swiper('.mySwiper', {
  loop: true,
  pagination: { el: '.swiper-pagination' },
  navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
});

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
