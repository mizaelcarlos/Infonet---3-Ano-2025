function minhaFuncao() {
  console.log("Executando a cada 1 segundo!");
}

const intervaloID = setInterval(minhaFuncao, 1000); // Executa a função "minhaFuncao" a cada 1 segundo

setTimeout(() => {
  clearInterval(intervaloID);
}, 3000);
