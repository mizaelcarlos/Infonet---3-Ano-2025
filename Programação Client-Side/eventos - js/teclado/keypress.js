const inputNome = document.getElementById("nome");

inputNome.addEventListener("keypress", function (event) {
  console.log("Tecla pressionada: " + event.key); // Exibe a tecla pressionada
  console.log("Código da tecla: " + event.charCode); // Exibe o código ASCII da tecla
});
