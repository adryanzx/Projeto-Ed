<?php
   //session_start();
   require "funcoesBD.php";
   
   
   //Cadastro de Aluno
   if(isset($_POST['nomecompleto'])  && 
      isset($_POST['email'])  && 
      isset($_POST['cpf']) &&
      isset($_POST['senha'])){

       $cpf = $_POST['cpf'];
       $nomecompleto = $_POST['nomecompleto'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];
       
       inserirCliente($cpf, $nomecompleto, $email, $senha);
   
       header('Location:../cadastro.php');
       die();
       }


    ?>