<?php 
require_once "funcoesBD.php";

function validar(){
        $nomecompleto = $_POST['nomecompleto'];   
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $conexao = conectarBD();
        $consulta = "SELECT email FROM aluno WHERE email = '$email' AND senha = '$senha'";
        $lista = mysqli_query($conexao,$consulta);
        if(mysqli_fetch_assoc($lista) > 0){
            session_start();
            $_SESSION["login"] = "ok";
            header("Location:Tad.php?error=SUCESSO");
        }else {
            header("Location: index.php?error=login");
        }
    }
}

function sessaoUsuario(){
    session_start();
    if(!@$_SESSION["login"] == "ok"){
        header("Location: index.php?error=ENTRAR");
    }
}
?>