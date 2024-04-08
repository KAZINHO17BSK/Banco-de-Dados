function mostrarCoração() {
    var botao = document.getElementById("botaoCurtir");
    botao.style.display = "block";
    botao.classList.add("ativo");
    
    setTimeout(function() {
      botao.style.display = "none";
      botao.classList.remove("ativo");
    }, 1000);
  }
  
  function curtir() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("contadorCurtidas").textContent = this.responseText + " curtidas";
      }
    };
    xhttp.open("GET", "curtir.php", true);
    xhttp.send();
  }