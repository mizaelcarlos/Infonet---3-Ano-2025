function validacao() {
  let nome = document.getElementById("nome");
  let cpf = document.getElementById("cpf");

  if (nome.value == "") {
    alert("Informe o nome");
  }

  if (cpf.value == "") {
    alert("Informe o cpf");
  }

  if (cpf.value.length != 11) {
    alert("CPF inválido");
  }
}

function converterMaiuscula() {
  let nome = document.getElementById("nome");
  nome.value = nome.value.toUpperCase();
}
