var navbar = document.getElementById('navbar');

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

window.onscroll = function() {
  stickyNavbar();
};

var sticky = navbar.offsetTop;
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

  elements.forEach(element => {
    element.style.opacity = '0';
  })
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
