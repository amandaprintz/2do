/* Script: togglar mellan att gömma och visa formulär för  */
const buttons = document.querySelectorAll('.show-form');
buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    button.parentNode.querySelector('form').classList.toggle('hidden');
  });
});

/* Sibling selector  */
