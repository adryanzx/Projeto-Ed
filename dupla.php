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
    <title>LISTA DUPLA</title>
</head>
<body>
    <header style="background-image: url(./assets/fundo.png)">
        <div class="container">
            <nav>
                <a href="index.html">
                    <!-- <img src="assets/logo.png" alt="logo"> -->
                </a>
                <ul class="ul">
                    <a href="Tad.php">TAD</a>
                    <a href="simples.php">Lista Simples</a>
                    <a href="dupla.php">Lista Dupla</a>
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
                    <h1>Listas Duplamente Encadeadas</h1>
                    <p>Aprenda mais sobre as Listas Duplamente Encadeadas abaixo!</p>
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
                <img src="assets/srGhS.png"></a>
            </div>
            <div class="php-text">
                <h3>O que é Lista Duplamente Encadeada?</h3>
                <p>É um tipo de lista encadeada que pode ser vazia ou que pode ter um ou mais nós, sendo que cada nó possui dois ponteiros: um que aponta para o nó anterior e outro que aponta para o proximo nó,podendo ser percorrida pelos dois lados, ou seja, você pode começar pela cabeça ou pelo rabo da lista e andando de nó em nó, voce pode escolher qual é o provável caminho mais eficiente, ela costuma ter, na prática melhor performance em todas operações, ainda que seja irrisório,e também pode ter maior consumo de memória.</p>
                <br>
                <p>O importante é que, neste tipo de lista, o ponteiro externo pode apontar para qualquer nó da lista, pois é possivel caminhar para a direita ou para a esquerda com igual facilidade.</p>    
                
            </div>
           
        </div>
    </section>

    
    <section class="php">
        <div class="container">
            <div class="php-text">
                <h3>Vantagens e Desvantagens</h3>
                <p>Vantagens: Maior facilidade de controle da lista, maior confiabilidade e menor risco de perda acidental da lista.</p>
                <br>
                <p>Desvantagem: Maior gasto de espaço em disco (2 nós a mais).</p>
                     
            </div>
            <div class="php-img">
                <img src="assets/Screenshot_105.png"></a>
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
					<img src="assets/Screenshot_1.png" alt="" />
					
				</figure>
				<figure class="swiper-slide">
					<img src="assets/Screenshot_2.png" alt="" />
				
				</figure>
				<figure class="swiper-slide">
					<img src="assets/Screenshot_3.png" alt="" />
					
				</figure>
				<figure class="swiper-slide">
					<img src="assets/lista-exemplo.png" alt="" />
					<figcaption class="swiper-description">
						<h2>teste</h2>
						<p>
							Exemplo basico acima de implementação de uma lista Duplamente Encadeada.
						</p>
					</figcaption>
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
                    What is an apple?
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