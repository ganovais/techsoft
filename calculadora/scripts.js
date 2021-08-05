document.addEventListener('DOMContentLoaded', () => {
  const input = document.getElementById('value');
  const error = document.querySelector('#error');
  input.focus();
  var somado = false;

  document.querySelectorAll('.button').forEach((button) => {
    button.onclick = () => {
      const operation = button.dataset.operation;
      const number = button.dataset.number;
      error.style.display = 'none';

      if (somado) {
        input.value = '';
        somado = false;
      }

      if (operation == 'clear') {
        input.value = '';
        input.focus();
        return;
      }

      if (operation == '=') {
        somado = true;
        var result = '';
        try {
          result = eval(String(input.value));
        } catch (err) {
          input.value = '';
          error.style.display = 'block';
          return;
        }

        if (isFinite(result)) {
          input.value = result.toFixed(3);
        } else {
          input.value = '';
          error.style.display = 'block';
        }
        return;
      }

      if (operation) {
        input.value += String(operation);
      } else {
        input.value += String(number);
      }
    };
  });
});
