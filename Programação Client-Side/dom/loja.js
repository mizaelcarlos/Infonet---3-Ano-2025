function alterarPromocaoDoDia() {
  const horaAtual = new Date().getHours();

  if (horaAtual >= 9) {
    const nomePromocaoElemento = document.getElementById("nome-promocao");

    nomePromocaoElemento.textContent = "Pen drive sandisk 64gb";
  }
}

alterarPromocaoDoDia();
