var navbar = document.getElementById('navbar');
var sticky = navbar.offsetTop;
var scrollTariffs = document.getElementById('scrollTariffs');

function toggleMenu() {
  var menu = document.getElementById('menu');
  if (menu.style.display === 'block') {
    navbar.classList.remove('h-full');
    menu.style.display = 'none';
  } else {
    navbar.classList.add('h-full');
    menu.style.display = 'block';
  }
}

/*scrollTariffs.onscroll = function() {
  console.log(scrollTariffs.scrollLeft);
  if (scrollTariffs.scrollLeft > 200) {
    scrollTariffs.removeEventListener('scroll', function() {
      console.log('deleted');
    });
  }
};*/

window.onscroll = function() {
  stickyNavbar();
};

function stickyNavbar() {
  if (window.pageYOffset >= sticky + 10) {
    navbar.classList.add('sticky-navbar');
  } else {
    navbar.classList.remove('sticky-navbar');
  }
}

function watchScroll() {
  if (scrollTariffs.scrollLeft > 200) {
    removeSwypeHint();
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var i = 1;
  var elements = document.querySelectorAll('section');

  // scroll event listener

  scrollTariffs.addEventListener('scroll', watchScroll);

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

function scrollToTariffs() {
  var tariffs = document.getElementById('tariffs');
  var offset = tariffs.offsetTop - 100;
  window.scrollTo({ top: offset, behavior: 'smooth' });
}

function removeSwypeHint() {
  var swypeHint = document.getElementById('swypeHint');
  swypeHint.classList.add('hidden');
  scrollTariffs.removeEventListener('scroll', watchScroll);
}
