function validarFormulario(event) {
      const email = document.getElementById("email").value;
      const senha = document.getElementById("senha").value;
      const confirmar = document.getElementById("confirmar").value;

      if (!email.includes("@") || !email.endsWith(".com")) {
        alert("Por favor, insira um e-mail válido (ex: usuario@email.com).");
        event.preventDefault();
        return false;
      }

      if (senha !== confirmar) {
        alert("As senhas não coincidem.");
        event.preventDefault();
        return false;
      }

      return true;
    }
