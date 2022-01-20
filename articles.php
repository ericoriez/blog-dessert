<?php require_once "connect.php";

$id_articles = $_GET['id'];
$req2 = $db->query("SELECT `id_article`, `titre`, `ingredients`, `photo`, `preparation` FROM `articles` WHERE `id_article` = $id_articles");
$row = $req2->fetch(PDO::FETCH_ASSOC);

ob_start();?>
    <section class="recette"><?php
        ?>
            <article>
                <h2><?= $row['titre']?></h2>
                <p><?= $row['ingredients']?></p>
                <img src="./assets/img-dessert/<?= $row['photo']?>" alt="">
                <p><?= $row['preparation']?></p>
            </article>
    </section> <?php
    $contenu = ob_get_clean();

    require_once "./assets/template-header-footer.php"; ?>
