const cabecalho1 = document.getElementById("cabecalho1");
cabecalho1.addEventListener("mouseover", function (evento) {
  cabecalho1.style.color = "blue";
  cabecalho1.style.fontSize = "16px";
});

function mudarCorCabecalho() {
  let cabecalho1 = document.getElementById("cabecalho1");
  cabecalho1.style.color = "blue";
  cabecalho1.style.fontSize = "16px";
}

const btnSalvar = document.getElementById("btnSalvar");
btnSalvar.addEventListener("click", function (evento) {
  let nome = document.getElementById("nome").value;
  let data_nascimento = document.getElementById("data_nascimento").value;
  let valor = document.getElementById("valor").value;

  if (nome === "") {
    alert("Informe o nome");
    evento.preventDefault();
  }
  if (data_nascimento === "") {
    alert("Informe a data de nascimento");
    evento.preventDefault();
  }
  if (valor === "") {
    alert("Informe o valor");
    evento.preventDefault();
  }
});

var nome = document.getElementById("nome");
nome.addEventListener("keypress", function (evento) {
  if (evento.key >= 0 && evento.key <= 9) {
    console.log("teste");
    nome.readOnly = true;
  } else {
    nome.readOnly = false;
  }
});
