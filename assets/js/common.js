!(function ($) {
  "use strict";

  let vh = window.innerHeight * 0.01;
  let vw = window.innerWidth * 0.01;
  console.log(window.innerWidth);

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });

  $(".back-to-top").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      1000
    );
    return false;
  });

  // Toggle .header-scrolled
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#header").addClass("header-scrolled");
    } else {
      $("#header").removeClass("header-scrolled");
    }
  });

  if ($(window).scrollTop() > 100) {
    $("#header").addClass("header-scrolled");
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $("#header").outerHeight() - 1;

  $(document).on("click", "a", function (e) {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == "#header") {
          scrollto = 0;
        }

        $("html, body").animate(
          {
            scrollTop: scrollto,
          },
          1000
        );

        if ($(this).parents(".nav-menu, .mobile-nav-menu").length) {
          $(".nav-menu .active, .mobile-nav-menu .active").removeClass(
            "active"
          );
          $(this).closest("li").addClass("active");
        }

        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $(".mobile-nav-toggle").toggleClass("toggle-active");
          $(".mobile-nav-overly").fadeOut();
        }

        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function () {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $("html, body").animate(
          {
            scrollTop: scrollto,
          },
          1000
        );
      }
    }
  });

  // Mobile Navigation
  $(".header-nav").prepend(
    '<button type="button" class="mobile-nav-toggle"><span class="toggle-icon"><span></span><span></span><span></span></span></button>'
  );
  $("body").append('<div class="mobile-nav-overly"></div>');

  $(document).on("click", ".mobile-nav-toggle", function (e) {
    $("body").toggleClass("mobile-nav-active");
    $(".mobile-nav-toggle").toggleClass("toggle-active");
    $(".mobile-nav-overly").toggle();
  });

  $(document).on("click", ".mobile-nav-menu .drop-down > a", function (e) {
    e.preventDefault();
    $(this).next().slideToggle(300);
    $(this).parent().toggleClass("active");
  });

  $(document).click(function (e) {
    var container = $("#mobile-nav, .mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($("body").hasClass("mobile-nav-active")) {
        $("body").removeClass("mobile-nav-active");
        $(".mobile-nav-toggle").toggleClass("toggle-active");
        $(".mobile-nav-overly").fadeOut();
      }
    }
  });

  // modal
  var $modal = $(".modal");

  $(document).on("click", '[data-toggle="modal"]', function (e) {
    var target = $(this).attr("href")
      ? $(this).attr("href")
      : $(this).attr("data-target");
    if (target.length !== 0 && $(document).has(target).length !== 0) {
      e.preventDefault();
      var $selecedModal = $(target);
      $("body").toggleClass("modal-open");
      $selecedModal.show();
      setTimeout(function () {
        $selecedModal.toggleClass("show");
      }, 100);
      return false;
    }
  });

  $(document).click(function (e) {
    var container = $(".modal .modal-content");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($("body").hasClass("modal-open")) {
        $("body").removeClass("modal-open");
        $modal.removeClass("show");
        setTimeout(function () {
          $modal.hide();
        }, 300);
      }
    }
  });

  $(document).on(
    "click",
    '.modal .close, [data-dismiss="modal"]',
    function (e) {
      $("body").removeClass("modal-open");
      $modal.removeClass("show");
      setTimeout(function () {
        $modal.hide();
      }, 300);
    }
  );

  var acc = document.getElementsByClassName("accordion");
  var i;
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var arrow = this.children;
      console.log(arrow[1].className);
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        document.querySelector("." + arrow[1].className).style.transform =
          "rotateZ(0)";
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        document.querySelector("." + arrow[1].className).style.transform =
          "rotateZ(270deg)";
      }
    });
  }

  // swiper
  var mainvisualSwiper = new Swiper(".mainvisual-swiper", {
    slidesPerView: 1,
    spaceBetween: 2,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".mainvisual-swiper-pagination",
      clickable: true,
    },
  });

  var thumbsSwiper = new Swiper(".flow-thumbs-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var newsSwiper = new Swiper(".top-news-swiper", {
    loop: true,
    slidesPerView: "auto",
    slidesPerView: 4.5,
    centeredSlides: true,
    watchSlidesProgress: true,
    breakpoints: {
      768: {
        slidesPerView: 4.5,
      },
      640: {
        slidesPerView: 3.5,
      },
      390: {
        slidesPerView: 2.5,
      },
      320: {
        slidesPerView: 1.7,
      },
    },
  });

  var newsSwiper = new Swiper(".top-service-swiper", {
    loop: false,
    slidesPerView: "auto",
    slidesPerView: 1.5,
    watchSlidesProgress: true,
    spaceBetween: 50,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1.5,
      },
      640: {
        slidesPerView: 1,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar-service",
      draggable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next1",
      prevEl: ".swiper-button-prev1",
    },
  });

  var instagramSwiper = new Swiper(".instagram-swiper", {
    loop: true,
    slidesPerView: "auto",
    centeredSlides: true,
    watchSlidesProgress: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var worksSwiper = new Swiper(".top-works-swiper", {
    loop: false,
    slidesPerView: "auto",
    slidesPerView: 2.5,
    centeredSlides: true,
    watchSlidesProgress: true,
    spaceBetween: 25,
    breakpoints: {
      768: {
        slidesPerView: 2.5,
        spaceBetween: 25,
      },
      640: {
        slidesPerView: 1.5,
      },
      390: {
        slidesPerView: 1.5,
      },
      320: {
        slidesPerView: 1.2,
        spaceBetween: 15,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar-works",
      draggable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next2",
      prevEl: ".swiper-button-prev2",
    },
  });

  var newsSwiper = new Swiper(".top-voice-swiper", {
    loop: true,
    slidesPerView: "auto",
    slidesPerView: 4.5,
    centeredSlides: true,
    watchSlidesProgress: true,
    breakpoints: {
      768: {
        slidesPerView: 4.5,
      },
      640: {
        slidesPerView: 3.5,
      },
      390: {
        slidesPerView: 2.5,
      },
      320: {
        slidesPerView: 1.7,
      },
    },
  });

  var newsSwiper = new Swiper(".related-example-swiper", {
    loop: true,
    slidesPerView: "auto",
    centeredSlides: true,
    watchSlidesProgress: true,
    breakpoints: {
      640: {
        loop: false,
        centeredSlides: false,
        slidesPerView: 3,
      },
    },
  });

  var swiperThumbs = new Swiper(".swiper-thumbs", {
    loop: false,
    slidesPerView: "auto",
    freeMode: true,
    watchSlidesProgress: true,
  });

  var swiperMain = new Swiper(".swiper-main", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperThumbs,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });
})(jQuery);
