<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>IF Técnico - Cadastro de Questões</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header>
    <div class="logo">IF Técnico</div>
    <nav>
      <ul>
        <li><a href="index.html">Início</a></li>
        <li><a href="login.html">Login</a></li>
        <li class="active">Cadastro</li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="form-container">
      <h2>Cadastrar Questão</h2>
      <form action="cadastrar.php" method="POST">
        <label for="enunciado">Enunciado:</label>
        <input type="text" id="enunciado" name="enunciado" required>

        <label for="resposta">Resposta:</label>
        <input type="text" id="resposta" name="resposta" required>

        <label for="alternativa_1">Alternativa 1:</label>
        <input type="text" id="alternativa_1" name="alternativa_1" required>

        <label for="alternativa_2">Alternativa 2:</label>
        <input type="text" id="alternativa_2" name="alternativa_2" required>

        <label for="alternativa_3">Alternativa 3:</label>
        <input type="text" id="alternativa_1" name="alternativa_3" required>

        <label for="alternativa_4">Alternativa 4:</label>
        <input type="text" id="alternativa_4" name="alternativa_4" required>

        <label for="ano">Ano:</label>
        <input type="text" id="ano" name="ano" required>


        <label for="materia_id">Materia:</label>
        <select name="materia_id" id="materia_id" required>
          <?php
            include "conexao.php";
            $sql = "SELECT id, nome FROM materia";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
          ?>
        </select>

        <label for="assunto_id">Assunto:</label>
        <select name="assunto_id" id="assunto_id" required>
          <?php
            include "conexao.php";
            $sql = "SELECT id, nome FROM assunto";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
          ?>
        </select>

        <button type="submit">Cadastrar</button>
      </form>
    </section>
  </main>

  <footer>
    <p><a href="https://www.ifsudestemg.edu.br/" target="_blank">Acesse o IF Sudeste MG</a></p>
  </footer>

  <script src="scripts.js"></script>
  
</body>
</html>

