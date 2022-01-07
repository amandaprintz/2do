/* Script: togglar mellan att gömma och visa formulär för  */
const buttons = document.querySelectorAll('.show-form');
buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    button.parentNode.querySelector('form').classList.toggle('hidden');
  });
});

/* Script for checkbox */
const form = document.querySelector('form');
const task = document.querySelector('input[type=checkbox]');

// When the user clicks on the checkbox the form will automagically submit.
task.addEventListener('click', () => form.submit());
