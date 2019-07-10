document.addEventListener('DOMContentLoaded', function() {
  var elements = document.querySelectorAll('.container');
  elements.forEach(element => {
    element.classList.add('anim-appear');
  });
  setTimeout(() => {
    elements.forEach(element => {
      element.classList.remove('anim-appear');
    });
  }, 1000);
});
