//o código abaixo imprime um alert na tela
// window.alert('Hoje é quinta-feira!')
// window.confirm('Deseja realmente realizar essa ação?')
// var n1 = 10;
// var n2 = 20;
// var soma = n1 + n2;
// alert(soma);

// nunero = 'Mizael';

// var nome = "Mizael"
// var idade = "18"

// document.write("O nome do professor é: " + nome + " , e a idade dele é " + idade);

// document.write("A altura do conteudo da janela é " + window.innerHeight + "px. <br/>")
// document.write("A largura do conteudo da janela é " + window.innerWidth + "px. <br/>")
// document.write(document.URL)

// var nome;
// const nome2 = 'Mizael';
// nome = "Equipamento";
// nome = "Notebook";

// function somar(){
//     let numero1;
//     let numero2;

//     return numero1 + numero2;

// }

// const media = 3;

// {
//     let teste = 1;

// }

// console.log(teste)

// var contador = 0;
// contador ++
// console.log(contador)

var dia = 8;

if (dia === 1) {
  console.log("Domingo");
} else if (dia === 2) {
  console.log("Segunda-feira");
} else if (dia === 3) {
  console.log("Terça-feira");
} else if (dia === 4) {
  console.log("Quarta-feira");
} else if (dia === 5) {
  console.log("Quinta-feira");
} else if (dia === 6) {
  console.log("Sexta-feira");
} else if (dia === 7) {
  console.log("Sábado");
} else {
  console.log("Dia inválido");
}

var dia = 7;
switch (dia) {
  case 1:
    console.log("Domingo");
    break;
  case 2:
    console.log("Segunda-feira");
    break;
  case 3:
    console.log("Terça-feira");
    break;
  case 4:
    console.log("Quarta-feira");
    break;
  case 5:
    console.log("Quinta-feira");
    break;
  case 6:
    console.log("Sexta-feira");
    break;
  case 7:
    console.log("Sábado");
    break;
  default:
    console.log("Dia inválido");
}

//Exemplo com if

var idade = 10;
if (idade >= 0 && idade <= 12) {
  console.log("Criança");
} else if (idade >= 13 && idade <= 19) {
  console.log("Adolescente");
} else if (idade >= 20 && idade <= 59) {
  console.log("Adulto");
} else if (idade >= 60) {
  console.log("Idoso");
} else {
  console.log("Idade inválida");
}

//Exemplo com switch
var idade = 10;
switch (true) {
  case idade >= 0 && idade <= 12:
    console.log("Criança");
    break;
  case idade >= 13 && idade <= 19:
    console.log("Adolescente");
    break;
  case idade >= 20 && idade <= 59:
    console.log("Adulto");
    break;
  case idade >= 60:
    console.log("Idoso");
    break;
  default:
    console.log("Idade inválida");
}









var tipoUsuario = 'magistrado'

var idade = 18;

if(idade >= 18){
    console.log('maior de idade')
}else{
    console.log('menor de idade')
}

