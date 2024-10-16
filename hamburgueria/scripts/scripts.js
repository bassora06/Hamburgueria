const botao = document.getElementById("botao");
botao.addEventListener("click", function () {
  this.classList.add("clicado"),
    setTimeout(() => {
      this.classList.remove("clicado");
    }, 1e3);
});
