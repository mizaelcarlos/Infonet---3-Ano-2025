const inputNome = document.getElementById("nome");

inputNome.addEventListener("blur", () => {
  const nome = inputNome.value;
  if (nome.length > 0) {
    message.textContent = `O valor inserido foi: ${nome}`;
  } else {
    message.textContent = "O campo está vazio.";
  }
});
