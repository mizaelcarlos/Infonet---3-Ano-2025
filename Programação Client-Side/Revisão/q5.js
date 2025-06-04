const btnAdicionar = document.getElementById("btnAdicionar");
var produtos = [];
btnAdicionar.addEventListener("click", function (event) {
  const produto = document.getElementById("produto");
  const valor = document.getElementById("valor");
  produtos.push({ valor: valor.value, produtox: produto.value });
  console.log(produtos);
  produto.value = "";
  valor.value = "";
  console.log(produtos.length);
});
