document.addEventListener('DOMContentLoaded', () => {
  const input = document.getElementById('value');
  const error = document.querySelector('#error');
  input.focus();
  var somado = false;

  document.querySelectorAll('.button').forEach((button) => {
    button.onclick = () => {
      const operation = button.dataset.operation;
      const number = button.dataset.number;

      if (operation == 'clear') {
        input.value = '';
        input.focus();
        return;
      }

      if (operation == '=') {
        var result = '';
        try {
        } catch (err) {}
      }
    };
  });
});
