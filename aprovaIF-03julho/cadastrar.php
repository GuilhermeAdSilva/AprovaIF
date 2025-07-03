<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>IF Técnico - Cadastro</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header>
    <div class="logo">IF Técnico</div>
    <nav>
      <ul>
        <li><a href="index.html">Início</a></li>
        <li class="active">Cadastro</li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="form-container">
      <?php
        include "conexao.php";

        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cidade = $_POST['cidade'];
        $campus_id = $_POST['campus_id'];

        $sql = "INSERT INTO `aluno`(`nome`, `data_nascimento`, `email`, `senha`, `cidade`, `campus_id`) VALUES ('$nome','$data_nascimento','$email','$senha','$cidade', '$campus_id')";

        if (mysqli_query ($conn, $sql)) {
            echo "$nome cadastrado com sucesso!";
        } else {
            echo "$nome NÃO foi cadastrado!";
        }
      ?>
      <a href="cadastro.php">Voltar</a>
    </section>
  </main>

  <footer>
    <p><a href="https://www.ifsudestemg.edu.br/" target="_blank">Acesse o IF Sudeste MG</a></p>
  </footer>

  <script src="scripts.js"></script>
  
</body>
</html>

