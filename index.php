
    <?php

        include_once("templates/header.php");
        include_once("templates/footer.php");
    ?>

    <!--Observação: como passo a utilizar cada vez mais recursos php observar o ; final/--> 

    <main>                                                                                                              <!-- vamos fazer o layout da nossa home iniciando com a tag main (principal) -->
        
        <div id="title-container">                                                                                      <!--criei uma div com container, representando o título com um id -->
            <h1> Progr Web 23 </h1>
            <p> Blog de programação </p>                                                                                <!-- criei um H1 e um parágrafo -->
        </div>
        
            <div id="posts-container">                                                                                  <!-- criei outra div, com outro container para id de posts, onde terei o looping --> 
                                                                                                                        <!-- de cada post -->
                <?php foreach ($posts as $post): ?>                                                                     <!-- um foreach e dentro dele terá o looping para cada um dos posts individual| -->

                        <div class="post-box">                                                                          <!-- div com classe post box -->

                            <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">            <!-- a imagem, no src a nossa $BASE_URL e lá no data/posts.php tenho a chave de --> 
                                                                                                                        <!-- imagem portanto irei acessar a imagem dentro da pasta. No alt também a busca.--> 
                            <h2 class="post-title">                                                                     <!-- criei o h2 com o título do post impresso na página -->
                                <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"> <?= $post['title']?> </a>    <!-- link para a página do post buscando as referências na pasta. Estou criando --> 
                            </h2>                                                                                       <!-- uma url para o post individual -->

                            <p class="post-description"> <?= $post['description'] ?> </p>                            <!-- descrição do post buscando referência na pasta. lincando a chave description -->

                            <div class="tags-container">                                                                <!-- por fim criamos uma classe na div para as tags e dentro um novo foreach -->

                                <?php foreach ($post['tags'] as $tag): ?>                                               <!-- foreach em post tags e tag. Assim terei acesso a todas as tags--> 
                                    <a href="##############"> <?= $tag ?> </a>                                          <!-- link que iria p/ algum post com informações desta tag mais não vamos utilizar-->
                                <?php endforeach; ?>

                            </div>

                        </div>

                <?php endforeach; ?>    
                                                                                                                        <!-- endforeach para finalizar -->
            </div>
    </main>                                                                                                             <!-- Ao final, ao rodar no navegador, terei todos os conteúdos e posts, fiz a --> 
                                                                                                                        <!-- parte do back-end, puxando para o front-end -->
