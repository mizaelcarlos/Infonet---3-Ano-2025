const btnSalvar = document.getElementById("btnSalvar");
const inputNome = document.getElementById("nome");

btnSalvar.addEventListener("click", () => {
  if (inputNome.value == "") {
    inputNome.focus();
  }
});
