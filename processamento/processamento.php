<?php
   session_start();
   require "funcoesBD.php";
   
   
   //Cadastro de Aluno
   if(isset($_POST['inputNomeCompleto'])  && 
      isset($_POST['inputCPF'])  && 
     isset($_POST['inputEmail']) &&
      isset($_POST['inputSenha'])){
   
       $nomecompleto = $_POST['inputNomeCompleto'];
       $cpf = $_POST['inputCPF'];
       $email = $_POST['inputEmail'];
       $senha = $_POST['inputSenha'];
       
       inserirCliente($cpf, $nomecompleto, $email, $senha);
   
       header('Location:cadastro.php');
       die();
       }

    ?>