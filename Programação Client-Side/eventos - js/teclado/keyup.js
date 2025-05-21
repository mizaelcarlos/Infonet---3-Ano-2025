const inputNome = document.getElementById("nome");

inputNome.addEventListener("keyup", function (event) {
  console.log("Tecla liberada: ", event.key);
});
