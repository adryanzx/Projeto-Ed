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
    <title>Aluno</title>
</head>

    <body>

    <div class="container">
  <div class="message signup">
    <div class="btn-wrapper">
      <button class="button" id="signup">Cadastra-se</button>
      <button class="button" id="login"> Login</button>
    </div>
  </div>
  <div class="form form--signup">
    <div class="form--heading">Bem-vindo Aluno(a)! Cadastra-se</div>
    <form autocomplete="off">
    <form method="POST" action="processamento/processamento.php">
      <input type="text" placeholder="Nome">
      <input type="number" placeholder="CPF">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Senha">
      <input type="submit" value="Cadastrar" id="button">
    </form>
    </form>

  </div>



  <div class="form form--login">
    <div class="form--heading">Bem vindo de volta!</div>
    <form autocomplete="off">
    <form action="processamento/validar.php" method="post">
      <input type="text" placeholder="Email">
      <input type="password" placeholder="Senha">
      <input type="submit" value="Entrar" id="button">
    </form>
    </form>
  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="js/main.js"></script>








</body>

</html>







