let titulo = document.title;
titulo = "teste";
console.log(titulo);

const cabecalho = document.getElementById("cabecalho_1");
cabecalho.textContent = "Manipulando o DOM usando getElementById";
cabecalho.textContent = "Aula de hoje";

let div = document.getElementById("div_01");
div.innerHTML = "<p>Div usando inner HTML</p>";
div.style.backgroundColor = "blue";
div.style.textDecoration = "underline";

let paragrafo = document.querySelector("p");
paragrafo.textContent = "Teste querySelector";

let paragrafos = document.querySelectorAll("p");
paragrafos.forEach((paragrafo) => {
  paragrafo.textContent = "Teste";
});

let cabecalho = document.querySelector("h1");
setTimeout(() => {
  cabecalho.textContent = "Professor";
}, 2000);
