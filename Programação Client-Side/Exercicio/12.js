const nome = document.getElementById("nome");
nome.addEventListener("keypress", function (event) {
  if (event.key >= "A" && event.key <= "Z") {
    nome.readOnly = true;
  } else {
    nome.readOnly = false;
  }
});
