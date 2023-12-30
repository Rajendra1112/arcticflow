$(document).ready(function () {
  // initialize animate on scroll library
  AOS.init({
    offset: 100,
    duration: 1000,
    once: true,
    // disable: true,
  });

  // youtube magnificPopup js code
  $(".youtube").magnificPopup({
    disableOn: 320,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  // sliding of testimonial card
  $(".testimonial-carousel").owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  // sliding of partners or clients
  // sliding of clients partners from left to right
  $(".clients-carousel-1").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    animateOut: "slideOutLeft",
    animateIn: "slideInLeft",
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // left sliding of clients or partners
  // sliding of partners or clients from right to left
  $(".clients-carousel-2").owlCarousel({
    rtl: true,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    animateOut: "slideOutRight",
    animateIn: "slideOutRight",
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // sliding of tools and technologies from left to right
  $(".tools-technologies-carousel").owlCarousel({
    loop: false,
    nav: false,
    dots: true,
    smartSpeed: 1000,
    animateOut: "slideOutLeft",
    animateIn: "slideInLeft",
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 8,
      },
    },
  });

  //js for circular progress bar using easypiechart jquery
  $(function () {
    $(".chart").easyPieChart({
      size: 190,
      barColor: "#2cbd2f",
      scaleLength: 0,
      lineWidth: 15,
      trackColor: "#f0f1f0",
      lineCap: "circle",
      animate: 2000,
    });
  });

  // js for scroll to top
  const scrollButton = document.querySelector("#scroll-to-top");

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 300) {
      scrollButton.style.display = "block";
    } else {
      scrollButton.style.display = "none";
    }
  });

  scrollButton.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
    });
  });
});
