/* Script: toggle between show/hide "add task"-form. */
const buttons = document.querySelectorAll('.show-form');
buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    button.parentNode.querySelector('form').classList.toggle('hidden');
  });
});

/* Script: checkbox form */
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
/*Script: shows delete form*/
const deleteForm = document.querySelector('.delete-user-form');
const deleteBtn = document.querySelector('.delete');
if (deleteForm) {
  deleteBtn.addEventListener('click', () => {
    deleteForm.classList.remove('hidden');
    deleteBtn.classList.add('hidden');
  });
}
