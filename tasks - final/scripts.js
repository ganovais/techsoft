var tasks = [];

const addEventToRemove = () => {
  const title = document.querySelector('#title');
  const removeButtons = document.querySelectorAll('.remove-task');
  removeButtons.forEach((button) => {
    button.onclick = () => {
      const indexTask = tasks.findIndex(
        (item) => item.id == button.parentElement.id
      );

      button.parentElement.remove();
      tasks.splice(indexTask, 1);
      localStorage.setItem('tasks', JSON.stringify(tasks));

      if (!document.querySelector('#tasks').childNodes.length) {
        title.innerHTML = 'Lista vazia';
      }
    };
  });
};

document.addEventListener('DOMContentLoaded', () => {
  const addButton = document.getElementsByClassName('plus')[0];
  const addInput = document.getElementById('task');
  const title = document.querySelector('#title');
  let savedTasks = localStorage.getItem('tasks');

  addButton.disabled = true;
  addInput.focus();

  addInput.onkeyup = () => {
    if (addInput.value.length > 0) {
      addButton.disabled = false;
    } else {
      addButton.disabled = true;
    }
  };

  if (savedTasks && savedTasks != '[]') {
    tasks = JSON.parse(savedTasks);

    title.innerHTML = 'Minhas tarefas';
    if (!tasks.length) {
      tasks = [tasks];
    }

    tasks.map((item) => {
      document
        .querySelector('#tasks')
        .insertAdjacentHTML('afterbegin', item.html);
    });

    addEventToRemove();
  }

  addButton.onclick = () => {
    if (!addInput.value) {
      return;
    }

    const uuid = new Date().getTime();

    const taskHtml =
      '<li class="task-item" id="' +
      uuid +
      '" >' +
      '<input type="checkbox" />' +
      '<p class="text-task">' +
      addInput.value +
      '</p>' +
      '<p class="remove-task"> -- </p>' +
      '</li>';

    document.querySelector('#tasks').insertAdjacentHTML('beforeend', taskHtml);

    tasks.unshift({ id: uuid, html: taskHtml });
    localStorage.setItem('tasks', JSON.stringify(tasks));

    title.innerHTML = 'Minhas tarefas';
    addInput.value = '';
    addInput.focus();
    addButton.disabled = true;

    addEventToRemove();
  };
});
