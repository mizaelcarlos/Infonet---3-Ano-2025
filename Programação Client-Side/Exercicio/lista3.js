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
// var nomes = [
//   "Henzo Fernadez",
//   "Antony",
//   "Juliana",
//   "Guilherme",
//   "Arthur",
//   "Lidia",
//   "Alessandra",
// ];

// for (let n = 0; n < nomes.length; n++) {
//   console.log(nomes[n]);
// }
//Questão 2 lista 4
// console.log(nomes[2]);

//Questão 3 lista 4
// nomes.push("Abner");

// console.log(misto[2]);
// console.log(misto.length);

// var valores = [];
// var valores1 = array();
// var misto = [400, "Papai", true, 34.45, 45];
// misto.push(500);
// misto.push(600);
// misto.pop();
// misto.shift();
// misto.unshift(450);

// console.log(misto[0]);
// console.log(misto[1]);

// for (let n = 0; n < misto.length; n++) {
//   console.log(misto[n]);
// }

// console.log(misto.indexOf("Papai"));

//Questão 6

// var numeros = [23, 45, 67, 89];
//224

// var soma = 0;
// for (let n = 0; n < numeros.length; n++) {
//   soma = soma + numeros[n];
// }
// console.log(soma);

// numeros[2] = 45;

// var letras = ["a", "b", "c"];

// letras[1] = "d";

// letras.forEach((v, u) => {
//   console.log(i);
// });

// for (let n = 0; n < letras.length; n++) {
//   console.log(letras[n]);
//   console.log(n);
// }

// array1.forEach((valor, posicao) => {
//   console.log(posicao);
// });

// var numeros = [7, 8, 9];
// var soma = 0;
// numeros.forEach((valor) => {
//   soma = soma + valor;
// });
// console.log(soma / numeros.length);

var aluno = {
  nome: "Gustavo",
  idade: 16,
  endereco: "Rua do telegrafo, n 1456",
  "telefone-fixo": "863222222",
};

aluno["telefone-fixo"];
aluno.endereco;

// console.log(aluno.nome);

var dia = 8;
var mes = 5;
var ano = 2025;

var apresentacao =
  dia + "/" + mes + "/" + ano + " O Museu virtual, uma experiencia imersiva";
var apresentacao = "O Museu virtual, uma experiencia imersiva";
var apresentacao = `${dia}/${mes}/${ano} O Museu virtual, uma experiencia imersiva`;

function verificarParOuImpar(numero) {
  if (numero % 2 == 0) {
    console.log("par");
  } else {
    console.log("Impar");
  }
}

var n1 = 20;

verificarParOuImpar(n1);

function imprimeSaudacao() {
  console.log("Bom dia");
}

function somar(numero1, numero2) {
  return numero1 + numero2;
}

// var texto = `Hoje ${dia}/${mes}/${ano} estudamos na primeira parte Arrays`;
// var texto =
// "Hoje " + dia + "/" + mes + "/" + ano + " estudamos na primeira parte Arrays";
// var texto = "Hoje estudamos na primeira parte Arrays";

// console.log(texto);

var n1 = 23;
var n2 = 45;

function somar(numero1, numero2) {
  let soma = numero1 + numero2;
  return soma;
}

// console.log(somar(2, 4));

// console.log(somar(n1, n2));

function exibirCabecalho(texto) {
  console.log(texto);
}

// exibirCabecalho("3º Ano de Ensino Médio EMI");

function verificarPrimo(numero) {
  if (
    (numero % 1 == 0 && numero % numero == 0 && numero % 2 != 0) ||
    numero == 2
  ) {
    return true;
  } else {
    return false;
  }
}

// console.log(verificarPrimo(3));

// var numeros = [4, 7, 8, 9, 10];
// for (let n = 0; n < numeros.length; n++) {
//   if (n % 2 != 0) {
//     console.log(numeros[n]);
//   }
// }
function maiorNumero(array) {
  let maior = 0;
  array.forEach((valor, index) => {
    if (valor > maior) {
      maior = valor;
    }
  });

  return maior;
}

array = [34, 45, 23, 12];
console.log(maiorNumero(array));
