<?php
include "conexao.php";

$id = $_GET['id'] ?? '';
$sql = "DELETE FROM aluno WHERE id = $id";
mysqli_query($conn, $sql);

header("Location: pesquisar.php");
