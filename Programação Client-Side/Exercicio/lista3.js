//Questão 1
// for (let n = 0; n <= 50; n++) {
//   console.log(n);
//   if (n % 17 == 0) {
//     break;
//   }
// }

//Questão 2
// for (let n = 1; n <= 500; n = n * 3) {
//   console.log(n);
// }

// var n = 1;
// while (n <= 500) {
//   console.log(n);
//   n = n * 3;
// }

// var n = 1;
// do {
//   console.log(n);
//   n = n * 3;
// } while (n <= 500);

// for (let n = 1; n <= 100; n++) {
//   if (n % 2 != 0) {
//     console.log(n);
//   }
// }

// var n = 1;
// while (n <= 100) {
//   if (n % 2 != 0) {
//     document.write("<p>" + n + "</p>");
//   }
//   n++;
// }

// var n = 1;
// do {
//   if (n % 2 != 0) {
//     document.write("<p>" + n + "</p>");
//   }
//   n++;
// } while (n <= 100);

// var senha;
// do {
//   senha = prompt("Digite a senha");
// } while (senha != "1234");

// var opcao;
// do {
//   opcao = prompt("Informe a opção 1 - Continuar e 2 - Sair");
// } while (opcao != "2");

// for (let n = 100; n >= 0; n = n - 5) {
//   console.log(n);
// }

// var tabuada = "";
// var numero = 7;
// for (let n = 1; n <= 10; n++) {
//   tabuada = numero + "+" + n + "=" + (numero + n);
//   console.log(tabuada);
//   tabuada = numero + "x" + n + "=" + numero * n;
//   console.log(tabuada);
//   tabuada = numero + "/" + n + "=" + numero / n;
//   console.log(tabuada);
//   tabuada = numero + "-" + n + "=" + (numero - n);
//   console.log(tabuada);
// }

// var soma = 0;
// for (let n = 1; n <= 100; n++) {
//   if (n % 4 == 0) {
//     soma = soma + n;
//   }
// }
// console.log(soma);

// var fatorial = 1;
// for (let n = 1; n <= 5; n++) {
//   fatorial = fatorial * n;
// }
// console.log(fatorial);
// var soma = 0;
// for (let n = 1; n <= 100; n++) {
//   if (n % 11 == 0) {
//     soma++;
//   }
// }
// console.log(soma);

// numeros.length;
// console.log(numeros[0]);
// var valores = [];
// var valores2 = array();

// var misto = [23, "Théo Hernandez", true];

// var numeros = [34, 45, 5, 2, 1];
// numeros.push(200);
// numeros.push(300);
// numeros.pop();
// numeros.shift();
// numeros.unshift(32);
// console.log(numeros.indexOf(1));
// for (let n = 0; n < numeros.length; n++) {
//   console.log(numeros[n]);
// }

//Questão 1 da lista 4
var nomes = [
  "Henzo Fernadez",
  "Antony",
  "Juliana",
  "Guilherme",
  "Arthur",
  "Lidia",
  "Alessandra",
];

for (let n = 0; n < nomes.length; n++) {
  console.log(nomes[n]);
}
//Questão 2 lista 4
console.log(nomes[2]);

//Questão 3 lista 4
nomes.push("Abner");
