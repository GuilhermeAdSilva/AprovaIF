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
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="form-container">
      <h2>Crie sua conta</h2>
      <p>É rápido e fácil começar a estudar com a gente.</p>
      <form action="cadastrar.php" method="POST">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>

        <label for="confirmar">Confirmar senha:</label>
        <input type="password" id="confirmar" name="confirmar" placeholder="Repita a senha" required>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Sua cidade" required>

        <label for="campus_id">Campus:</label>
        <select name="campus_id" id="campus_id" required>
          <?php
            include "conexao.php";
            $sql = "SELECT id, nome FROM campus";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
          ?>
        </select>

        <button type="submit">Cadastrar</button>
      </form>
      <p class="cadastro-link">Já tem uma conta? <a href="login.php">Faça login</a>.</p>
    </section>
  </main>

  <footer>
    <p><a href="https://www.ifsudestemg.edu.br/" target="_blank">Acesse o IF Sudeste MG</a></p>
  </footer>

  <script src="scripts.js"></script>
  
</body>
</html>

