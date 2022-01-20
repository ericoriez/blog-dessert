<?php require_once "connect.php";

    $req = $db->query("SELECT `id_categorie`, `name`, `vignette` FROM `categorie`"); 
    $fetch = $req->fetchAll(PDO::FETCH_ASSOC);

    ob_start();?>
        <section class="categorie"><?php
            foreach($fetch as $cat){ ?>
                <article >
                    <a href="">
                         <h2><?= $cat['name']?></h2>
                         <img src="./assets/img-dessert/<?= $cat['vignette']?>" alt="">
                    </a>
                </article>
            <?php } ?>
        </section><?php 
    $categorie = ob_get_clean();

    
    
    $reqart = $db->query("SELECT `id_article`, `titre`, `photo`, `date_creation` FROM `articles`");
    $fetch2 = $reqart->fetchAll(PDO::FETCH_ASSOC);

    ob_start();?>
        <section class="articles" ><?php
            foreach($fetch2 as $ligne){ ?>
                <article>
                    <figure>
                        <figcaption><?= $ligne['titre']?></figcaption>
                        <a href="./articles.php?id=<?= $ligne['id_article']?> "><img src="./assets/img-dessert/<?= $ligne['photo']?>" alt=""></a>
                    </figure>   
                </article>
            <?php } ?>
         </section><?php
    $contenu = ob_get_clean();

require_once "./assets/template-header-footer.php";