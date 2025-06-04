const nota1 = document.getElementById("nota1");
const nota2 = document.getElementById("nota2");
const btnCalcularMedia = document.getElementById("calcularMedia");

btnCalcularMedia.addEventListener("click", function (event) {
  let media = (parseFloat(nota1.value) + parseFloat(nota2.value)) / 2;
  if (media >= 8) {
    console.log("Aprovado ");
  } else {
    console.log("Reprovado ");
  }
  event.preventDefault();
});
