var navbar = document.getElementById('navbar');
var sticky = navbar.offsetTop;
var scrollTariffs = document.getElementById('scrollTariffs');
var soldPercent = document.getElementById('sold-percent');
var swypeHint = document.getElementById('swypeHint');
var scrollTopBtn = document.getElementById('scroll-top-btn');
var executed = false;

window.onscroll = function() {
  stickyNavbar();
  toggleScrollTopBtn();
  animateSoldPercent('35%');
};

//navbar onscroll
function stickyNavbar() {
  if (window.pageYOffset >= sticky + 10) {
    navbar.classList.add('sticky-navbar');
  } else {
    navbar.classList.remove('sticky-navbar');
  }
}

// progress sold animation
function animateSoldPercent(percent) {
  if (
    window.scrollY > soldPercent.offsetTop - window.innerHeight / 2 &&
    !executed
  ) {
    var elem = document.getElementById('percent-bar');
    elem.style.width = percent;
    executed = true;
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

// scroll to tariff cards
function scrollToTariffs() {
  var tariffs = document.getElementById('tariffs');
  var offset = tariffs.offsetTop - 100;
  window.scrollTo({ top: offset, behavior: 'smooth' });
}

// scroll top
function scrollToTop() {
  console.log('sss');

  window.scrollTo({ top: 0, behavior: 'smooth' });
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

// scroll top button appear on scroll

function toggleScrollTopBtn() {
  if (window.pageYOffset >= 500) {
    scrollTopBtn.style.display = 'flex';
  } else {
    scrollTopBtn.style.display = 'none';
  }
}
