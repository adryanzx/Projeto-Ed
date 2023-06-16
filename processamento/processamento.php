<?php
   //session_start();
   require "funcoesBD.php";
   
   
   //Cadastro de Aluno
   if(isset($_POST['nome'])  && 
      isset($_POST['email'])  && 
      isset($_POST['cpf']) &&
      isset($_POST['senha'])){

       $cpf = $_POST['cpf'];
       $nomecompleto = $_POST['nome'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];
       
       inserirCliente($cpf, $nome, $email, $senha);
   
       header('Location:../index.php');
       die();
       }


    ?>