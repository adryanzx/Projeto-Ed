<?php
    require_once "funcoesBD.php";
    class Aluno{
        private $nomecompleto;
        private $email
        private $cpf;
        private $senha;
        
        public function __construct(){
            @$this->nomecompleto = $_POST['inputNome Completo'];
            @$this->email = $_POST['inputEmail'];
            @$this->cpf = $_POST['inputcpf'];
            @$this->senha = $_POST['inputSenha'];
        }

       
        public function cadastrarAluno(){
            $conexao = conectarBD();
            $inserir = "INSERT INTO aluno (cpf, nomecompleto, email,  senha) 
                        VALUES ('$this->cpf',
                        '$this->nomecompleto',
                        '$this->email',
                        '$this->cpf',
                        '$this->senha')";
            mysqli_query($conexao,$inserir);
        }
        public function listarAluno(){
            $conexao = conectarBD();
            $consulta = "SELECT * FROM aluno";
            $listaFuncionario = mysqli_query($conexao,$consulta);
                while($funcionario = mysqli_fetch_assoc($listaAluno)){
                    $email = substr($aluno['email'], 0, 16) . "...";

                   
                }
        }
        
    }


    ?>