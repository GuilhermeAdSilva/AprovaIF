<?php
include "conexao.php";

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM aluno WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$aluno = mysqli_fetch_assoc($resultado);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];

    $sqlUpdate = "UPDATE aluno SET nome='$nome', data_nascimento='$data', email='$email', cidade='$cidade' WHERE id=$id";
    mysqli_query($conn, $sqlUpdate);
    header("Location: pesquisar.php");
}
?>

<h2>Editar Aluno</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $aluno['nome'] ?>"><br>
    Data de Nascimento: <input type="date" name="data_nascimento" value="<?= $aluno['data_nascimento'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $aluno['email'] ?>"><br>
    Cidade: <input type="text" name="cidade" value="<?= $aluno['cidade'] ?>"><br>
    <button type="submit">Salvar</button>
</form>
