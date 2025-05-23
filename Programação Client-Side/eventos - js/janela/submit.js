const formulario = document.getElementById("form");

formulario.addEventListener("submit", function (evento) {
  const nome = document.getElementById("nome").value;
  const uf = document.getElementById("uf").value;
  if (nome === "") {
    evento.preventDefault(); // Impedir o envio padrão
    alert("Por favor, preencha o nome.");
  }
  if (uf === "") {
    evento.preventDefault(); // Impedir o envio padrão
    alert("Por favor, preencha o UF.");
  }
});
