<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>IF Técnico - Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<>

    <?php
        $pesquisa = $_POST["busca"] ?? '';
        
        include "conexao.php";

        $sql = "SELECT * FROM aluno WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);
    ?>
    

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
      <h1>Pesquisar</h1>
      <nav>
        <form action="pesquisar.php" method="post">
            <input type="search" placeholder="pesquisar" name="busca">
            <button type="submit">Buscar</button>
        </form>
        
      </nav>
      
        <table>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Cidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($linha = mysqli_fetch_assoc($dados)) {
                        $id = $linha["id"];
                        $nome = $linha['nome'];
                        $data_nascimento = $linha['data_nascimento'];
                        $email = $linha['email'];
                        $cidade = $linha['cidade'];

                        echo "<tr>
                          <th scope='row'>$nome</th>
                          <td>$data_nascimento</td>
                          <td>$email</td>
                          <td>$cidade</td>
                          <td>
                            <a href='editar.php?id=$id'>Editar</a> |
                            <a href='remover.php?id=$id' onclick=\"return confirm('Tem certeza que deseja remover este aluno?');\">Remover</a>
                          </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>

    </section>
  </main>

  <footer>
    <p><a href="https://www.ifsudestemg.edu.br/" target="_blank">Acesse o IF Sudeste MG</a></p>
  </footer>

  <script src="scripts.js"></script>
  
</body>
</html>
