<?php
    
    function conectarBD(){
        $conexao = mysqli_connect("localhost","root","","ed");
        return($conexao);
    }
    
    function inserirCliente($cpf, $nomecompleto, $email,  $senha){
        
        $conexao = conectarBD();
        $consulta = "INSERT INTO cliente (cpf, nomecompleto ,email, senha) 
                     VALUES ('$cpf','$nomecompleto','$email','$senha')";
        mysqli_query($conexao,$consulta);
        echo "<script>alert('CADASTRO EFETUADO');
        window.location.href='cadastro.php'</script>";
    }



?>