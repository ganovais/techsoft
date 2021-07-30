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
  return Math.round(number);
}
// console.log(arredonda(7.9));

const somaArrow = (num1, num2) => num1 + num2;
// console.log(somaArrow(13, 77));

// Constante não altera o valor inicial
// const nome = 'Gabriel Novais';
// nome = 'Teste';

const arrIntegers = [1, 2, 3, 4, 5];
const arrString = ['Gabriel', 'Rafael'];

// console.log(arrString[0]);
//Length: carrega tamanho do array
// console.log(arrIntegers.length);

// for (let i = 0; i < arrString.length; i++) {
//   console.log(arrString[i]);
// }

// arrString.forEach((item) => console.log(item));
// arrIntegers.forEach((number, index) => {
//   // number = number + 20
//   number += 20;
//   if (number == 22) {
//     console.log('Número é 22' + '\nPosição: ' + index);
//   }
// });

const newArrIntegers = arrIntegers.map((item) => item * 2);
// console.log(newArrIntegers);

const pessoa = {
  nome: 'Gabriel Novais',
  idade: 23,
  vivo: true,
};

// console.log(pessoa.nome);
// console.log(`Idade ${pessoa.idade} Vivo ${pessoa.vivo ? 'Sim' : 'Nã0'}`);

const pessoas = [
  {
    nome: 'Juca',
    idade: 23,
    vivo: true,
  },
  {
    nome: 'Joaquina',
    idade: 22,
    vivo: false,
  },
  {
    nome: 'Joana',
    idade: 21,
    vivo: true,
  },
];

// pessoas.forEach((pessoa) => console.log(pessoa.nome));
const pessoasVivas = pessoas.filter((pessoa) => pessoa.vivo);
const pessoasZumbis = pessoas.filter((pessoa) => !pessoa.vivo);

// Remove o primeiro elemento do array
// pessoas.shift();

// Remove o último elemento do array
// pessoas.pop();

// Remove de uma posição específica
// pessoas.splice(1, 1);
// pessoas.splice(1, 0, pessoa);

// Adiciona no final do array
// pessoas.push(pessoa);

// Adiciona no começo do array
// pessoas.unshift(pessoa);

// const juca = pessoas.find((pessoa) => pessoa.nome == 'Juca');
// console.log(juca);

const indexJoaquina = pessoas.findIndex((pessoa) => pessoa.nome == 'Joaquina');

// if (indexJoaquina > -1) {
//   pessoas.splice(indexJoaquina, 1);
// }

const todosVivos = pessoas.every((pessoa) => pessoa.idade >= 21);
// console.log(todosVivos);

const somaIdade = pessoas.reduce((total, pessoa) => {
  //   if (pessoa.vivo) {
  //     total += pessoa.idade;
  //   }
  return total + pessoa.idade;
}, 0);

console.log(somaIdade);
console.log(pessoas);
