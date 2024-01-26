<?php

    include_once("helpers/url.php");
    include_once("data/posts.php");     // Vamos resgatar os dados do nosso back-end para inserir no front-end. Aqui vamos incluir os dois arquivos de dados que 
    include_once("data/categorias.php");// estão na minha pasta data (o posts e o categories). Assim teremos acesso a estes dados de qualquer lugar do meu site, 
                                        // vou utilizar um exemplo (que será depois apagado) de ir no index e codar o print_r. Ele estará aqui no header mais 
                                        // vamos utilizar lá no index.     
?>

<!DOCTYPE html>

    <html lang="pt-br">

        <head>

            <meta charset="UTF-8">

                <title>Nosso Blog PW</title>                                                

                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <!-- Estilo do Projeto -->

                <link rel="stylesheet" type="text/Css" href="<?= $BASE_URL ?>/Css/style.Css">   
                                                                                                
                <!-- Google Fonts -->

                <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Press+Start+2P&display=swap" rel="stylesheet"> -->
                
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

        </head>

        <body>
                <header>

                    <a href="<?= $BASE_URL ?>" id="logo" >                               <!-- href que vai levar para BASE_URL para barra do meu projeto --> 

                        <img src="<?= $BASE_URL ?>/img/logo1.png" alt="Nosso Blog PW">    <!-- aqui vamos ter acesso a imagem já baixada para o projeto -->

                    </a>

                    <nav>

                        <ul id="navbar">                                            <!-- tag de navegação para html semântico / indica que há uma barra de navegação --> 
                                                                                    <!-- uma ul com id de navbar -->
                            <li> <a href="<?= $BASE_URL ?>" class="nav-link" >  Home  </a> </li>      <!-- link para home -->
                            <li> <a href="################" class="nav-link" > Categorias </a> </li>  <!-- link cego somente para completar o template -->
                            <li> <a href="################" class="nav-link" >  Sobre  </a> </li>     <!-- link cego somente para completar o template -->
                            <li> <a href="<?= $BASE_URL ?>contato.php" class="nav-link" >  Contato </a> </li>    <!-- link para contato -->

                        </ul>

                    </nav>

                </header>

        </body>
    </html>