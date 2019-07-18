var navbar = document.getElementById('navbar');
var sticky = navbar.offsetTop;
var scrollTariffs = document.getElementById('scrollTariffs');
var swypeHint = document.getElementById('swypeHint');
var scrollTopBtn = document.getElementById('scroll-top-btn');
var executed = false;
var scrolling = false;

window.onscroll = function() {
  stickyNavbar();
  toggleScrollTopBtn();
};

//navbar onscroll
function stickyNavbar() {
  if (window.pageYOffset >= sticky + 10) {
    navbar.classList.add('sticky-navbar');
  } else {
    navbar.classList.remove('sticky-navbar');
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var i = 1;
  var elements = document.querySelectorAll('section');

  // scroll event listener
  scrollTariffs.addEventListener('scroll', watchScroll);

  // swype hint
  if (window.localStorage.getItem('swypeHint'))
    swypeHint.style.display = 'none';

  // animation on appear
  elements.forEach(element => {
    element.style.opacity = '0';
  });
  elements.forEach(element => {
    setTimeout(() => {
      element.style.opacity = '100';
      element.classList.add('anim-appear');
    }, 300 * i);
    i++;
  });
  setTimeout(() => {
    elements.forEach(element => {
      element.classList.remove('anim-appear');
    });
  }, 2500);
});

// scroll to offset
function scrollToOffset(offset) {
  window.scrollTo({ top: offset, behavior: 'smooth' });
}

function scrollToTop() {
  scrollTopBtn.classList.add('scroll-top-off');
  scrolling = true;
  setTimeout(() => {
    scrollTopBtn.style.display = 'none';
    scrolling = false;
  }, 700);
  scrollToOffset(0);
}

// scroll to tariff cards
function scrollToTariffs() {
  var tariffs = document.getElementById('tariffs');
  var offset = tariffs.offsetTop - 100;
  scrollToOffset(offset);
}

// disable swype hint
function removeSwypeHint() {
  swypeHint.classList.add('hidden');
  scrollTariffs.removeEventListener('scroll', watchScroll);
  window.localStorage.setItem('swypeHint', true);
}

function watchScroll() {
  if (scrollTariffs.scrollLeft > 200) {
    removeSwypeHint();
  }
}

// menu toggle
function toggleMenu() {
  var menu = document.getElementById('menu');
  if (menu.style.display === 'block') {
    navbar.classList.remove('h-full');
    menu.style.display = 'none';
    document.getElementById('open-burger').style.display = 'block';
    document.getElementById('close-burger').style.display = 'none';
    document.body.style.overflow = 'auto';
  } else {
    navbar.classList.add('h-full');
    menu.style.display = 'block';
    document.getElementById('open-burger').style.display = 'none';
    document.getElementById('close-burger').style.display = 'block';
    document.body.style.overflow = 'hidden';
  }
}

function removeOffer() {
  var elem = document.getElementById('last-gb-offer');
  elem.remove();
}

// scroll top button appear on scroll

function toggleScrollTopBtn() {
  if (!scrolling) {
    if (window.pageYOffset >= 500) {
      scrollTopBtn.classList.remove('scroll-top-off');
      scrollTopBtn.style.display = 'flex';
    } else {
      scrollTopBtn.style.display = 'none';
    }
  }
}
