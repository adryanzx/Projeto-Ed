<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTES/ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN</title>
</head>

<body>



    <header>
        <section class='cabecalho-logo'>
            <img src='assets/computador.png'>
          
           
        </section>
        
    </header>
    <section id="login-box">
        <section id="login">
            <h1 id="login-texto">Login</h1>
            <form action="../processamento/validacao.php" method="post">
                <input type="text" name="email" value="" placeholder="Email" class="login-input"><br>
                <input type="password" name="senha" value="" placeholder="Senha" class="login-input"><br>
                <input type="submit" value="ENTRE" id="login-submit">
            </form>
            <section id="links">
                <a href="">Esqueci minha senha</a>
                <a href="">Fazer login com SMS</a>
            </section>
            <section id="ou">
                <hr>OU<hr>
            </section>
            <section id="links-botao">
                <button onclick="alert('....')"><img src="assets/facebook.png">Facebook</button>
                <button onclick="alert('....')"><img src="assets/google.png">Google</button>
                <button onclick="alert('....')"><img src="assets/apple.png" >Apple</button>
            </section>
            <p>
                <l>Aluno Novo? </l><a href="cadastro.php"> Cadastrar</a>
            </p>
        </section>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="links">
                <a href="#"> <i class="fa fa-github"></i></a>
                <a href="#"> <i class="fa fa-instagram"></i></a>
                <a href="#"> <i class="fa fa-linkedin"></i></a>
            </div>
            <p>Desenvolvido por <br>Adryan Freire Oliveira<br> 
                Arthur Marques <br>
                Diogo 

            </p>
        </div>
    </footer>


















    </html>
</body>