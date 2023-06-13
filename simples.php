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
    <title>LISTA SIMPLES</title>
</head>

<body>


 <header style="background-image: url(./assets/fundo.png)">
        <div class="container">
            <nav>
                <a href="index.html">
                    <!-- <img src="assets/logo.png" alt="logo"> -->
                </a>
                <ul class="ul">
                    <a href="Tad.html">TAD</a>
                    <a href="simples.html">Lista Simples</a>
                    <a href="dupla.html">Lista Dupla</a>
                    <a class="btn" href="Sobre.html">Sobre Nós</a>
                    <div class="close-icon" onclick="closeMenu()">
                        <i class="fa fa-times-circle"></i>
                    </div>
                </ul>
                <div class="menu-icon" onclick="openMenu()">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
            <section class="banner">
                <div class="banner-text">
                    <h1>Listas Simplesmente Encadeadas</h1>
                    <p>Aprenda mais sobre as Listas Simplesmente Encadeadas abaixo!</p>
                </div>
            </section>
            
        </div>
    </header>
   

    <section class="php">
        <h1>Lista Duplamente Encadeada</h1>
        <div class="container">
            <div class="php-text">
                <h3>O que significa Nó?</h3>
                <p>Antes de tudo precisamos entender o significado de Nó, que sera usado ao decorrer das explicações, ou seja, cada elemento de uma lista encadeada é chamado de célula ou nó, e possui dois campos, um para guardar a informação e o outro para guardar o endereço do nó seguinte. O último nó da lista aponta para nulo. As listas encadeadas são dinâmicas, ou seja, tem a vantagem terem seu tamanho variável.</p>
                    
            </div>
            <div class="php-img">
                <img src="assets/lista_encadeada.png"></a>
            </div>
        </div>
    </section>

    <!--php 2 -->
    <section class="php">
        <div class="container">
            <div class="php-img">
                <img src="assets/listasimplewsmente.png"></a>
            </div>
            <div class="php-text">
                <h3>O que é Lista Simplesmente Encadeada?</h3>
                <p>Uma lista encadeada é uma representação de uma sequência de objetos, todos do mesmo tipo, na memória RAM (= random access memory) do computador. Cada elemento da sequência é armazenado em uma célula da lista: o primeiro elemento na primeira célula, o segundo na segunda, e assim por diante.</p>
                <br>
                <p>Elas também possuem uma estrutura dinâmica, ou seja, não precisamos conhecer com antecedência o número de elementos que ela conterá. Nas listas encadeadas, todos os elementos, exceto o último, apontam para o seguinte. Assim, cada elemento é formado por dois componentes: o dado armazenado e a ligação com o elemento seguinte. </p>    
                
            </div>
           
        </div>
    </section>

    
    <section class="php">
        <div class="container">
            <div class="php-text">
                <h3>Vantagens e Desvantagens</h3>
                <p><b>Vantagens:</b><br>
                    1.A inserção e remoção de elementos podem ser feitas sem
                    deslocar os itens seguintes da lista
                    2. Não há necessidade de previsão do número de elementos da
                    lista; o espaço necessário é alocado em tempo de execução
                    3. Facilita o gerenciamento de várias listas (fusão, divisão,...)</p>
                <br>
                <p><b>Desvantagem:</b><br>
                    1. Acesso indireto aos elementos<br>
                    2. Tempo variável para acessar os elementos (depende da
                    posição do elemento)<br>
                    3. Gasto de memória maior pela necessidade de um novo campo
                    para o ponteiro</p>
                     
            </div>
            <div class="php-img">
                <img src="assets/images.png"></a>
            </div>
        </div>
    </section>

    <!-- COMEÇO DOS CODIGOS/ALTERAR IMAGENS E LEGENDAS -->
    <section class="informacoes" >
        <h3>Implementação</h3>
            <p>Como Implementar?</p>
		<div class="swiper carousel">
			<div class="swiper-wrapper">
				<figure class="swiper-slide">
					<img src="assets/Screenshot_107.png" alt="" />
					
				</figure>
				<figure class="swiper-slide">
					<img src="assets/Screenshot_108.png" alt="" />
				
				</figure>
				<figure class="swiper-slide">
					<img src="assets/Screenshot_109.png" alt="" />
					
				</figure>
				<figure class="swiper-slide">
					<img src="assets/Screenshot_110.png" alt="" />
					
				</figure>
			</div>
			<button type="button" class="swiper-button-next"></button>
			<button type="button" class="swiper-button-prev"></button>
			<div class="pagi"></div>
		</div>
		<!-- LINK JS ABAIXO DO SLIDE/FIM DOS CODIOGOS -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!-- CARDS LOGO ABAIXO -->

   
    
    <!-- PERGUNTAS -->

    <section class="container">
        <div class="accordion">
            <h2 class="title">Perguntas Frequentes</h2>
            <article class="accordion-panel">
                <input id="accordion-question" name="accordion" type="radio" checked />
                <label for="accordion-question">
                    ?
                    <i class="ri-add-line open"></i>
                    <i class="ri-subtract-line close"></i>
                </label>
                <div class="accordion-body">
                    <p class="accordion-answer">
                      Veja exemplos de implementações basicas acima para melhor entendimento do conteudo.
                    </p>
                </div>
            </article>

            
        </div>
    </section>

    </section>
    </section>

    <!-- FIM DOS CARDS ACRESCENTAR MAIS -->

    
   
        <!-- FIM PERGUNTAS -->
        <section class="depoimentos">
            <div class="container">
                <h3>Desenvolvedores</h3>
                <h5>Veja os nossos <strong> Desenvolvedores</strong></h5>
                <div class="cards">
                    <div class="card-item">
                         <img src="assets/adryan.jpg" alt=""> 
                        <p class="nome-user">Adryan Oliveira</p>
                        <p class="depoimento-user">3º termo do superior em ADS
                            Especialista em Front-End
                            Program for love</p>
                    <div class="estrelas">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
    
                <div class="card-item">
                     <img src="assets/diogo.png" alt=""> 
                    <p class="nome-user">Diogo Neves</p>
                    <p class="depoimento-user">Atualmente cursando na ADS na FATEC no periodo da tarde.</p>
                <div class="estrelas">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
    
    
            <div class="card-item">
                <img src="assets/arthur.png" alt=""> 
                <p class="nome-user">Arthur Marques</p>
                <p class="depoimento-user">3º termo do superior em ADS
                    Especialista em back-end
                    Program for love
                </p>
            <div class="estrelas">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        </div>
    
    
            </div>
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
    
    <script src="js/main.js"></script>
    </html>
</body>



































    </html>
</body>