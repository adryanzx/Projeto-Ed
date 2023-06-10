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
    <title>TRABALHO ED</title>
</head>
<body>
    <header style="background-image: url(./assets/fundo.png)">
        <div class="container">
            <nav>
                <a href="index.html">
                     <!-- <img src="assets/computador.png" alt="logo"> -->
                </a>
                <ul class="ul">
                    <a href="Tad.html">TAD</a>
                    <a href="simples.html">Lista Simples</a>
                    <a href="dupla.html">Lista Dupla</a>
                    <a class="btn" href="sobre.html">Sobre Nós</a>
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
                    <h1>Listas Encadeadas</h1>
                    <p>Aprenda mais sobre as Listas Encadeadas da linguagem C#</p>
                    <a href="sobre.html" class="btn animate-btn">Sobre Nós</a>
                </div>
            </section>
            
        </div>
    </header>
   

    <section class="php">
        <h1>INTRODUÇÃO</h1>
        <div class="container">
            <div class="php-text">
                <h3>Lista Ligada</h3>
                <p>Uma lista encadeada ou lista ligada é uma estrutura de dados linear e dinâmica. Ela é composta por várias células que estão interligadas através de ponteiros, ou seja, cada célula possui um ponteiro que aponta para o endereço de memória da próxima célula.</p>
                     <a href="dupla.html" class="btn animate-btn">Saiba Mais</a>
            </div>
            <div class="php-img">
                <img src="assets/imagem1.png"></a>
            </div>
        </div>
    </section>

    <!--php 2 -->
    <section class="php">
        <div class="container">
            <div class="php-img">
                <img src="assets/img2.png"></a>
            </div>
            <div class="php-text">
                <h3>Encadeadas</h3>
                <p>Listas encadeadas. Uma lista encadeada é uma representação de uma sequência de objetos, todos do mesmo tipo, na memória RAM (= random access memory) do computador. Cada elemento da sequência é armazenado em uma célula da lista: o primeiro elemento na primeira célula, o segundo na segunda, e assim por diante.
                </p>
                     <a href="simples.html" class="btn animate-btn">Saiba Mais</a>
            </div>
           
        </div>
    </section>

    
    <section class="php">
        <div class="container">
            <div class="php-text">
                <h3>Lista & Estrutura de Dados</h3>
                <p>Uma Lista Encadeada é uma estrutura de dados do tipo container, ou seja, serve para armazenar elementos em uma certa ordem. A lista encadeada oferece operações de acesso geral, tais como inserção, remoção e busca arbitrária.</p>
                     <a href="dupla.html" class="btn animate-btn">Saiba Mais</a>
            </div>
            <div class="php-img">
                <img src="assets/imagem2.png"></a>
            </div>
        </div>
    </section>

    <!-- COMEÇO DOS CODIGOS/ALTERAR IMAGENS E LEGENDAS -->
    <section class="informacoes" >
        <h3>Exemplos de como são as Listas Encadeadas</h3>
            <p>Conheça mais sobre as Listas Encadeadas</p>
		<div class="swiper carousel">
			<div class="swiper-wrapper">
				<figure class="swiper-slide">
					<img src="assets/exemplo.png" alt="" />
					<figcaption class="swiper-description">
						<h2>Elemento</h2>
						<p>
							Exemplo de Lista com Novos Elementos e aonde eles ficam, como são inseridos e as ordens.
						</p>
					</figcaption>
				</figure>
				<figure class="swiper-slide">
					<img src="assets/exemplo1.png" alt="" />
					<figcaption class="swiper-description">
						<h2>Frutas</h2>
						<p>
							Exemplo de Lista com Frutas e aonde começa a cabeça da Lista...
						</p>
					</figcaption>
				</figure>
				<figure class="swiper-slide">
					<img src="assets/exemplo3.png" alt="" />
					<figcaption class="swiper-description">
						<h2>Continuação</h2>
						<p>
							Nesse exemplo vocês vão ver a ordem de como s frutas irá fica na Lista
						</p>
					</figcaption>
				</figure>
				<figure class="swiper-slide">
					<img src="assets/exemplo2.png" alt="" />
					<figcaption class="swiper-description">
						<h2>Implementação</h2>
						<p>
							Aqui está um exemplo de Implementação.
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

     <section class="conectar">
        <div class="container">
             <h3>Inserir em Códigos</h3>
            <p>Como fazer a inserção?</p> 
            <div class="card">
            <div class="publi">
                <img src="assets/st1.png" alt="php" />
                <div>
                    <span class="autor">
                        <i class="ri-user-line icon"></i> Arthur Marques
                    </span>
                   
                </div>
            </div>
            <div class="info">
                <h2 class="titlee">Lista Topo</h2>
                <span class="subtitle">Criando o Topo da Lista</span>
                <p class="desc">
                    As células de uma lista encadeada são compostas de dois elementos cada. O primeiro elemento é o dado efetivo a ser armazenado e o segundo compraz uma referência para o próximo elemento da lista.
                </p>
               
            </div>

    </div>
    <div class="card">
            <div class="publi">
                <img src="assets/st2.png" alt="php" />
                <div>
                    <span class="autor">
                        <i class="ri-user-line icon"></i> Arthur Marques
                    </span>
                   
                </div>
            </div>
            <div class="info">
                <h2 class="titlee">Null</h2>
                <span class="subtitle">Quando o Topo for NULL</span>
                <p class="desc">
                    o ponteiro para o elemento anterior na lista é igual a NULL, significando que o elemento encontrado é o primeiro da lista, então fazemos com que o ponteiro que representa a lista passe a ser o próximo (ou seja, o segundo).
                </p>
               
            </div>
    </div>
    <div class="card">
        <div class="publi">
            <img src="assets/st3.png" alt="php" />
            <div>
                <span class="autor">
                    <i class="ri-user-line icon"></i> Arthur Marques
                </span>
               
            </div>
        </div>
        <div class="info">
            <h2 class="titlee">Vazio</h2>
            <span class="subtitle">Quando a Lista está Vazia</span>
            <p class="desc">
                Quando a lista está vazia ela volta dês do começo e começa tudo de novo
            </p>
           
        </div>
    </div>



    
    <!-- PERGUNTAS -->

    <section class="container">
        <div class="accordion">
            <h2 class="title">Perguntas Frequentes</h2>
            <article class="accordion-panel">
                <input id="accordion-question" name="accordion" type="radio" checked />
                <label for="accordion-question">
                    Quais os tipos de listas encadeadas?
                    <i class="ri-add-line open"></i>
                    <i class="ri-subtract-line close"></i>
                </label>
                <div class="accordion-body">
                    <p class="accordion-answer">
                        Existem muitos tipos de listas encadeadas. Listas simples, duplamente encadeadas, circulares, com e sem sentinelas. Todas essas listas permitem criar conjuntos de dados que crescem dinamicamente. 
                    </p>
                </div>
            </article>

            <article class="accordion-panel">
                <input id="accordion-question-2" name="accordion" type="radio" />
                <label for="accordion-question-2">
                    Qual a vantagem da lista encadeada?
                    <i class="ri-add-line open"></i>
                    <i class="ri-subtract-line close"></i>
                </label>
                <div class="accordion-body">
                    <p class="accordion-answer">
                        A principal vantagem da utilização de listas encadeadas sobre listas sequenciais é o ganho em desempenho em termos de velocidade nas inclusões e remoções de elementos. Em uma lista contígua é necessário mover todos os elementos da lista para uma nova lista para realizar essas operações.
                    </p>
                </div>
            </article>

            <article class="accordion-panel">
                <input id="accordion-question-3" name="accordion" type="radio" />
                <label for="accordion-question-3">
                    Como remover um elemento de uma lista encadeada?
                    <i class="ri-add-line open"></i>
                    <i class="ri-subtract-line close"></i>
                </label>
                <div class="accordion-body">
                    <p class="accordion-answer">
                        Para remover o primeiro nó precisamos criar um ponteiro auxiliar para o mesmo e, em seguida, fazer o início da lista apontar para o próximo nó do nó que será removido. Para o retorno ha diversas possibilidades e a escolha vai depender do problema que você está resolvendo com uma lista encadeada.
                    </p>
                </div>
            </article>

            <article class="accordion-panel">
                <input id="accordion-question-4" name="accordion" type="radio" />
                <label for="accordion-question-4">
                    O que é uma lista circular?
                    <i class="ri-add-line open"></i>
                    <i class="ri-subtract-line close"></i>
                </label>
                <div class="accordion-body">
                    <p class="accordion-answer">
                        Por fim, existe também a lista circular, que pode ser simplesmente ou duplamente encadeada. Na lista circular, como o nome sugere, o último Nó da lista aponta novamente para o início, o primeiro Nó da lista. Neste caso é preciso ter atenção ao percorrer a lista para não entrar em loop infinito.
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
</body>
</html>