var nome = document.getElementById("nome");
var lista = document.getElementById("lista");
var nomes = [];
nome.addEventListener("keypress", function (event) {
  if (event.key == "Enter") {
    nomes.push(nome.value);
    lista.innerHTML += "<li>" + nome.value + "</li>";
    nome.value = "";
  }
});
