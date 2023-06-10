<?php
    
function conectarBD(){
    $conexao = mysqli_connect("localhost","root","","ed");
    return($conexao);
}

function retornarAlunos(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM aluno";
    $listaAluno = mysqli_query($conexao,$consulta);
    return $listaAluno;
}




?>