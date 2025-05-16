//onmouseover com função
function mudaCor(elemento) {
  elemento.style.backgroundColor = "blue";
}

//mouseover com addEventListener
const minhaDiv = document.getElementById("minhaDiv");

minhaDiv.addEventListener("mouseover", (evento) => {
  minhaDiv.style.backgroundColor = "blue";
});

minhaDiv.addEventListener("mouseout", (evento) => {
  minhaDiv.style.backgroundColor = "green";
});
