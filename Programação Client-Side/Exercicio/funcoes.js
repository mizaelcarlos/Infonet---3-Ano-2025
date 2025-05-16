function realizarCalculo(numero1, numero2, callback) {
  return callback(numero1, numero2);
}

function somar(a, b) {
  return a + b;
}

function multiplicar(a, b) {
  return a * b;
}

let resultadoSoma = realizarCalculo(5, 3, somar);
console.log("Soma:", resultadoSoma);

let resultadoMultiplicacao = realizarCalculo(5, 3, multiplicar);
console.log("Multiplicação:", resultadoMultiplicacao);
