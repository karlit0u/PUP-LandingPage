// Carousel
let slideIndex = 1;

document.addEventListener('DOMContentLoaded', function () {
  showSlides(slideIndex);
  setInterval(function () {
    plusSlides(1);
  }, 5000);
});

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName('mySlides');
  let dots = document.getElementsByClassName('dot');
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(' active', '');
  }
  slides[slideIndex - 1].style.display = 'block';
  dots[slideIndex - 1].className += ' active';
}

// SCROLL TO TOP - INDEX
window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  var scrollToTopBtn = document.getElementById("scrollToTopBtn");

  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}

// ID Application
function redirectToSection(sectionId) {
  // Hide all sections
  document.querySelectorAll('.redirected-section').forEach(section => {
      section.style.display = 'none';
  });

  // Show the selected section
  document.getElementById(sectionId + '-section').style.display = 'block';

  // You can also add additional logic here for further customization or redirection
}

