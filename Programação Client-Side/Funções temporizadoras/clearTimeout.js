const timeoutId = setTimeout(() => {
  console.log("Este código não será executado");
}, 3000);

clearTimeout(timeoutId); // Cancela o temporizador
console.log("Timeout cancelado");
