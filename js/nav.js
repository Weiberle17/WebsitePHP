const icon = document.querySelector('.icon');
const mobile = document.querySelector('.mobile');

icon.addEventListener('click', function() {
  icon.classList.toggle('active');
  mobile.classList.toggle('active');
})
