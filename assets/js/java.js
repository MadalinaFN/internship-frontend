var swiper1 = new Swiper("#mySwiper1", {
  slidesPerView: 1,
  spaceBetween: 10,
  direction: getDirection(),
  navigation: {
    nextEl: '#swbn1',
    prevEl: '#swbp1',
  },
  on: {
    resize: function () {
      swiper1.changeDirection(getDirection());
    }
  },
  breakpoints: {
    1501: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1201: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    992: {
      slidesPerView:2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
  loop: true,
  autoplay: {
    delay: 2000,
  }
});
var swiper2 = new Swiper("#mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  direction: getDirection(),
  navigation: {
    nextEl: '#swbn2',
    prevEl: '#swbp2',
  },
  on: {
    resize: function () {
      swiper2.changeDirection(getDirection());
    }
  },
  breakpoints: {
    1501: {
      slidesPerView: 7,
      spaceBetween: 30,
    },
    1401: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
  loop: true,
  autoplay: {
    delay: 2000,
  }
});

function getDirection() {
  var windowWidth = window.innerWidth;
  var direction = window.innerWidth <= 160 ? 'vertical' : 'horizontal';

  return direction;
}