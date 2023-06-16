<?php 
//session_start();
require "funcoesBD.php";

//DECLARAÇÃO DE VARIÁVEIS
$email = $_POST['email'];
$senha = $_POST['senha'];
$logar = $_POST['logar'];

$conn = conectarBD();

// Consulta a tabela 
$sql = "SELECT * FROM aluno WHERE aluno_email='$email' AND aluno_senha='$senha'";
$result = $conn->query($sql);

// Verifica se encontrou algum aluno
if ($result->num_rows > 0) {
    // Armazena os dados do aluno na sessão
    $_SESSION['usuario'] = $result->fetch_assoc();
    // Redireciona para a página de home
    header("Location: ../Tad.php");
    exit;
}
?>