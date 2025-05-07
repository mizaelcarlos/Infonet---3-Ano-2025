//questão 2
var nota = "A";
switch (nota) {
  case "A":
    console.log("Excelente");
    break;
  case "B":
    console.log("Bom");
    break;
  case "C":
    console.log("Regular");
    break;
  case "D":
    console.log("Ruim");
    break;
  case "F":
    console.log("Reprovado");
    break;

  default:
    console.log("Nota inválida");
    break;
}

//Questão 3
let num1 = 6;
let num2 = 2;
let operador = "-";
switch (operador) {
  case "+":
    console.log(num1 + num2);
    break;
  case "-":
    console.log(num1 - num2);
    break;
  case "*":
    console.log(num1 * num2);
    break;
  case "/":
    console.log(num1 / num2);
    break;
  default:
    console.log("Operador inválido");
}

// Questão 4

var nivel = 4

switch (nivel) {
    case 1:
        console.log("Iniciante")
        break;
    case 2:
        console.log("Intermediário")
        break;
    case 3:
        console.log("Avançado")
        break;
    case 4:
        console.log("Expert")
        break;
    case 5:
        console.log("Lenda")
        break;
    default:
        console.log("Nível inválido")
        break;
}
//questão 5
var item= "hambúrguer"
switch (item) {
    case "hambúrguer":
console.log("R$ 10,00")
        break;
    case "batata":
        console.log("R$ 5,00")
        break;
    case "refri":
        console.log("R$ 4,50")
        break;
    case "sorvete":
        console.log("R$ 7,00")
        break;

    default:
        console.log("Item não encontrado")
        break;
}

// questao 6
var codigoCOR = "G"
switch (codigoCOR) {
    case "R":
        console.log("Vermelho")
        break;
    case "G":
        console.log("Verde")
        break;
    case "B":
        console.log("Azul")
        break;
    default:
        console.log("Código inválido")
        break;
}

//Questão 7

var mes = 8
switch (mes) {
    case 1:
        console.log("Janeiro - 31")
        break;
    case 2:
        console.log("Fevereiro - 29")
        break;
    case 3:
        console.log("Março - 31")
        break;
    case 4:
        console.log("Abril- 30")
        break;
    case 5:
        console.log("Maio - 31")
        break;
    case 6:
        console.log("Junho - 30")
        break;
    case 7:
        console.log("Julho - 30")
        break;
    case 8:
        console.log("Agosto - 31")
        break;
    case 9:
        console.log("Setembro - 30")
        break;
    case 10:
        console.log("Outubro - 31")
        break;
    case 11:
        console.log("Novembro - 30")
        break;
    case 12:
        console.log("Dezembro - 31")
        break;

    default:
        console.log("Mês Inválido")
        break;
}

// questão 8
var ingles="goodbye"

switch (ingles) {
    case 'hello':
        console.log('olá')    
        break;

    case 'thanks':
        console.log('obrigado')    
        break;

    case 'goodbye':
        console.log('adeus')    
        break;

    default:
        console.log('palavra não traduzida')
        break;
}
var idade = 18
switch (true) {
     case idade < 13:
        console.log("criança")
        break
    case idade >= 13 && idade < 18:
         console.log("Adolescente")
         break;
    case idade >=18 && idade <60:
         console.log ("Adulto")
        break
    case idade >=60:
         console.log ("Idoso")
        break

}
//questao 10
var comando= "w"
switch (comando) {
    case "w":
        console.log("andar para frente")
        break;
        case "d":
        console.log("andar para direita")
        break;
        case "s":
        console.log("andar para esquerda")
        break;
        case "a":("andar para tras")
        console.log
        break;

    default:
        console.log("comando invalido")
        break;
}