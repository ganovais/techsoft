const addEventToRemove = () => {
  const title = document.querySelector('#title');
  const removeButtons = document.querySelectorAll('.remove-task');
  removeButtons.forEach((button) => {
    button.onclick = () => {
      button.parentElement.remove();

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

  //   localStorage.setItem('nome', 'Gabriel Novais');
  //   const nome = localStorage.getItem('nome');
  //   alert(nome);

  addButton.disabled = true;
  addInput.focus();

  addInput.onkeyup = () => {
    if (addInput.value.length > 0) {
      addButton.disabled = false;
    } else {
      addButton.disabled = true;
    }
  };

  addButton.onclick = () => {
    if (!addInput.value) {
      return;
    }

    document
      .querySelector('#tasks')
      .insertAdjacentHTML(
        'afterbegin',
        '<li class="task-item">' +
          '<input type="checkbox" />' +
          '<p class="text-task">' +
          addInput.value +
          '</p>' +
          '<p class="remove-task"> -- </p>' +
          '</li>'
      );

    title.innerHTML = 'Minhas tarefas';
    addInput.value = '';
    addInput.focus();
    addButton.disabled = true;

    addEventToRemove();
  };
});
