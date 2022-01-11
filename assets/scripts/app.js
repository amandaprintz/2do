/* Script: toggle between show/hide "add task"-form. */
const buttons = document.querySelectorAll('.show-form');
buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    button.parentNode.querySelector('form').classList.toggle('hidden');
  });
});

/* Script: checkbox forms */
const taskForms = document.querySelectorAll('.tasksForm');

if (taskForms.length !== 0) {
  setCheckboxEventListener(taskForms);
}

function setCheckboxEventListener(forms) {
  forms.forEach((form) => {
    const checkbox = form.querySelector('.checkboxClass');
    checkbox.addEventListener('click', () => {
      form.submit();
    });
  });
}
