var hidden = false;

const firstway = () => {
  const h3 = document.getElementsByClassName('title')[0];

  if (!hidden) {
    h3.style.display = 'none';
    document.querySelector('#toggle').innerHTML = 'MOSTRAR';
  } else {
    h3.style.display = 'block';
    document.querySelector('#toggle').innerHTML = 'ESCONDER';
  }

  hidden = !hidden;
};

const secondway = () => {
  const h3 = document.querySelector('.title');
  const button = document.querySelector('#toggle');

  if (h3.classList.contains('hidden')) {
    h3.classList.remove('hidden');
    button.innerHTML = 'ESCONDER';
    button.style.background = '#ff9000';
  } else {
    h3.classList.add('hidden');
    button.innerHTML = 'MOSTRAR';
    button.style.background = '#252422';
  }
};

document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('#toggle').onclick = secondway;
});
