<?php
    
    function conectarBD(){
        $conexao = mysqli_connect("localhost","root","","ed");
        return($conexao);
    }
    
    function inserirCliente($cpf, $nomecompleto, $email,  $senha){
        
        $conexao = conectarBD();
        $consulta = "INSERT INTO aluno (aluno_cpf, aluno_nome, aluno_email, aluno_senha) 
                     VALUES ('$cpf','$nomecompleto','$email','$senha')";
        mysqli_query($conexao,$consulta);

        echo "<script>alert('CADASTRO EFETUADO');";
        echo "window.location.href='../cadastro.php';</script>";
    }


?>