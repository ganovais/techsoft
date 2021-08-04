const countdown = () => {
  //   console.log('Hello World');
  const endDate = new Date('Aug 3, 2021 20:57:00').getTime();
  const now = new Date().getTime();
  const distance = endDate - now;

  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;

  const textDay = Math.floor(distance / day);
  const textHour = Math.floor((distance % day) / hour);
  const textMinute = Math.floor((distance % hour) / minute);
  const textSecond = Math.floor((distance % minute) / second);

  document.querySelector('.day').innerHTML = textDay;
  document.querySelector('.hour').innerHTML = textHour;
  document.querySelector('.minute').innerHTML = textMinute;
  document.querySelector('.second').innerHTML = textSecond;

  if (distance < 0) {
    clearInterval(x);
    const divComingSoon = document.querySelector('.coming-soon');
    divComingSoon.firstElementChild.remove();

    const h2 = document.createElement('h2');
    const text = document.createTextNode('Sejam bem vindos');

    h2.appendChild(text);
    // appendChild - insere no final
    divComingSoon.prepend(h2); //Insere no começo

    // divComingSoon.insertAdjacentHTML('afterbegin', '<h2>Sejam bem vindos</h2>');
    /*
    "afterbegin" - After the beginning of the element (as the first child)
    "afterend" - After the element
    "beforebegin" - Before the element
    "beforeend" - Before the end of the element (as the last child)
  */
  }
};

const x = setInterval(countdown, 1000);

setTimeout(() => {
  console.log('delay');
}, 4000);
