
<!- Agora que concluimos a home vamos fazer a página do post individual ->

<!- Inicialmente vamos copiar tudo que temos no contato.php e colar aqui no post.php que acabamos de criar ->

<?php

    include_once("templates/header.php");

        if(isset($_GET['id'])) {                // vamos faze um if para verificar se veio algo no GET, no exemplo o id

            $postId = $_GET['id'];              // colocamos uma variável para id do post

            $currentPost;                       // currentpost = postagem atual (vamos achar este post)

            foreach($posts as $post) {          // utilizo o foreach

                if($post['id'] == $postId) {

                $currentPost = $post;           // assim teremos acesso ao post que vem lá do id e achar ele no array de dados pelo id

                }

            }

        }

?>

    <main id="post-container">                   <!- vai trazer para tela o título e a descrição ->

        <div class="content-container">

            <h1 id="main-title"><?= $currentPost['title'] ?></h1>

            <p id="post-description"><?= $currentPost['description'] ?></p>

                    <div class="img-container">                                                                             <!-- coloquei a imagem dentro de uma div e criei uma classe -->

                        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">      <!-- para imagem vou precisar da $BASE_URL -->

                    </div>                                                                                                  <!-- embaixo da imagem terei o conteúdo do post com lorem*5 -->

                    <p class="post-content">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. 
                    Assumenda quidem ea doloribus architecto sequi, nam doloremque non, 
                    commodi placeat numquam ipsam debitis ex quasi aliquam magni voluptate iste molestiae officiis.
                    Facilis distinctio, id iusto eum sit nemo similique dolor sint sapiente. 
                    Autem deserunt iusto expedita doloribus adipisci officiis, excepturi porro quisquam quibusdam corrupti ab ullam sequi cum, beatae saepe doloremque? 
                    Quos temporibus nulla nobis facilis id, excepturi debitis corrupti dolore laborum. Repudiandae consectetur nobis eum error doloremque dolore repellendus, nisi. 
                    Ipsa, cum ipsam deleniti soluta non ad animi! Rerum, voluptates?
                    Suscipit quibusdam a nostrum dolor aspernatur placeat hic reprehenderit, cumque unde explicabo recusandae, earum temporibus ab neque, 
                    adipisci nam tempora cupiditate nisi laudantium ratione quidem possimus odio accusamus similique eius. 
                    Hic quam, obcaecati tenetur sapiente saepe voluptate modi ab earum nihil, mollitia maxime, nesciunt. 
                    Tempora laborum qui esse, tenetur totam! Quibusdam ratione veritatis qui ullam facilis consectetur dolorum blanditiis tempore.</p>

                    
                    <p class="post-content">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. 
                    Assumenda quidem ea doloribus architecto sequi, nam doloremque non, commodi placeat numquam ipsam debitis ex quasi aliquam magni voluptate iste molestiae officiis.
                    Facilis distinctio, id iusto eum sit nemo similique dolor sint sapiente. 
                    Autem deserunt iusto expedita doloribus adipisci officiis, excepturi porro quisquam quibusdam corrupti ab ullam sequi cum, beatae saepe doloremque? 
                    Quos temporibus nulla nobis facilis id, excepturi debitis corrupti dolore laborum. Repudiandae consectetur nobis eum error doloremque dolore repellendus, nisi. 
                    Ipsa, cum ipsam deleniti soluta non ad animi! Rerum, voluptates?
                    Suscipit quibusdam a nostrum dolor aspernatur placeat hic reprehenderit, cumque unde explicabo recusandae, earum temporibus ab neque, 
                    adipisci nam tempora cupiditate nisi laudantium ratione quidem possimus odio accusamus similique eius.
                    Hic quam, obcaecati tenetur sapiente saepe voluptate modi ab earum nihil, mollitia maxime, nesciunt. 
                    Tempora laborum qui esse, tenetur totam! Quibusdam ratione veritatis qui ullam facilis consectetur dolorum blanditiis tempore.</p>

        </div>

        <aside id="nav-container">                                         <!- vamos criar a barra de navegação com um as=e -> 
 
        <h3 id="tags-title"> Tags </h3>                                <!- vou imprimir na tela as tags dos posts ->

            <ul id="tag-list">
                
                <?php foreach($currentPost['tags'] as $tag): ?>

                    <li>
                        
                        <a href="#######"><?= $tag ?></a>               <!- loop nas tags ->

                    </li>

                <?php endforeach; ?>
            
            </ul>

        <h3 id="categories-title"> Categorias </h3>                     <!- vou imprimir na tela as categorias ->

            <ul id="categories-list">

                <?php foreach($categories as $category): ?>

                    <li>                                                <!- loop nas categorias ->

                        <a href="#########"><?= $category ?> </a>
                        
                    </li>

                <?php endforeach; ?>

            </ul>
            
        </aside>

    </main>

<?php

    include_once("templates/footer.php");

?>

