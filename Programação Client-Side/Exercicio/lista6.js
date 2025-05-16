//questão 1
var titulo = document.getElementById("titulo");
titulo.innerText = "<p>Olá Mundo<p/>";

//questão 2
var paragrafo = document.getElementById("mensagem");
paragrafo.style.color = "blue";

//questão 3
var div = document.getElementById("caixa");
div.style.border = "1px solid red";
div.style.height = "10px";

//questão 4
var paragrafo2 = document.getElementById("paragrafo");
paragrafo2.style.fontSize = "24px";

//questão 5
var nome = document.getElementById("nome");
nome.value = "João";

//questão 6
var h2 = document.querySelector("h2");
h2.innerText = "subtítulo";

//questão 7
var elementos = document.getElementsByClassName("destaque");
for (let n = 0; n < elementos.length; n++) {
  elementos[n].style.backgroundColor = "yellow";
}

var idade = 6;
switch (true) {
  case (idade > 6 && idade <10):
    
    break;

  default:
    break;
}
