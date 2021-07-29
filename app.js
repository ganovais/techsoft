function hello() {
  console.log('Hello World');
}

// hello();

function par(number) {
  return number % 2 === 0;
}

var simPar = par(20);

function soma(num1, num2) {
  return num1 + num2;
}

// let resultSoma = soma(13, 88);

// if (resultSoma > 100) {
//   console.log('Maior do que cem.');
// } else {
//   console.log('Menor ou igual a cem.');
// }

/*
 * Math.round(x)   Returns x rounded to its nearest integer
 * Math.ceil(x)	   Returns x rounded up to its nearest integer
 * Math.floor(x)	Returns x rounded down to its nearest integer
 * Math.trunc(x)   Returns the integer part of x (new in ES6)
 * Math.sign(x)    Returns if x is negative, null or positive
 */
function arredonda(number) {
  return Math.floor(number);
}
// console.log(arredonda(7.9));

const somaArrow


