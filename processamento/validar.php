<?php 
session_start();
require "funcoesBD.php";

//DECLARAÇÃO DE VARIÁVEIS
$email = $_POST['login_email'];
$senha = $_POST['login_senha'];
$logar = $_POST['logar'];

$conn = conectarBD();

// Consulta a tabela 
$sql = "SELECT * FROM aluno WHERE alu_email='$email' AND alu_senha='$senha'";
$result = $conn->query($sql);

// Verifica se encontrou algum aluno
if ($result->num_rows > 0) {
    // Armazena os dados do aluno na sessão
    $_SESSION['usuario'] = $result->fetch_assoc();
    // Redireciona para a página de home
    header("Location: Tad.php");
    exit;
}
?>