const inputNome = document.getElementById("nome");
var message = document.getElementById("mensagem");

inputNome.addEventListener("change", () => {
  message.textContent = `O valor inserido foi: ${inputNome.value}`;
});
