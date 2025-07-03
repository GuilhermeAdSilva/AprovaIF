<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>IF Técnico - Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">IF Técnico</div>
    <nav>
      <ul>
        <li><a href="index.html">Início</a></li>
        <li class="active">Login</li>
        <li><a href="cadastro.php">Cadastro</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="form-container">
      <h2>Bem-vindo de volta!</h2>
      <p>Faça login para continuar estudando.</p>
      <form action="#" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

        <button type="submit">Entrar</button>
      </form>
      <p class="cadastro-link">Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>.</p>
      <a href="pesquisar.php">pesquisar</a>
    </section>
  </main>

  <footer>
    <p><a href="https://www.ifsudestemg.edu.br/" target="_blank">Acesse o IF Sudeste MG</a></p>
  </footer>

  <?php
        include "conexao.php";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $senha = mysqli_real_escape_string($conn, $_POST['senha']);

            $sql = "SELECT * FROM aluno WHERE email = '$email' AND senha = '$senha'";
            $resultado = mysqli_query($conn, $sql);

            if(mysqli_num_rows($resultado) == 1) {
                echo "<p style='color:green; text-align:center;'>Usuário autenticado com sucesso!</p>";
            } else {
                echo "<p style='color:red; text-align:center;'>Usuário não encontrado ou credenciais inválidas.</p>";
            }
        }
    ?>

  <script src="scripts.js"></script>
  
</body>
</html>
