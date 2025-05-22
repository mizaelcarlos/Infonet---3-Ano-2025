window.addEventListener("beforeunload", function (event) {
  event.returnValue = "Tem certeza que deseja sair?"; // Exibe caixa de confirmação
});
