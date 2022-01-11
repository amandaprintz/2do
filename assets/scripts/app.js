/* Script: toggle between show/hide "add task"-form. */
const buttons = document.querySelectorAll('.show-form');
buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    button.parentNode.querySelector('form').classList.toggle('hidden');
  });
});

/* Script: checkbox forms */
