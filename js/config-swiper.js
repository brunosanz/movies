var swiper5 = new Swiper('.swiper5', {
  slidesPerView: 6.5,
  spaceBetween: 5,
  loop: true,
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 5,
    stretch: 0,
    depth:90,
    modifier: 3,
    slideShadows: true,
  },
  // init: false,
  navigation: {
    nextEl: '.swiper-button-next5',
    prevEl: '.swiper-button-prev5',
  },
    pagination: {
    el: ".swiper-pagination",
    //dynamicBullets: true,
  },
  pagination: {
    el: '.swiper-pagination5',
    clickable: true,
  },
  mousewheel: true,
  keyboard: true,
  breakpoints: {
    1024: {
      slidesPerView: 6.5,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 3.5,
      spaceBetween: 20,
    },
    320: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    }
  }
});