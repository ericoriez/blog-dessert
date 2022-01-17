<!-- connection a la base de donnée -->
<?php require_once "connect.php";

    // creation de la variable requete de la base de donnée 
    $req = $db->query("SELECT `id_categorie`, `name`, `vignette` FROM `categorie`");

    // transformation de la requete(objet ilisible)en tableaux 
    $fetch = $req->fetchAll(PDO::FETCH_ASSOC);

    // stocker les information de facon temporaire 
    ob_start();?>
        <section><?php
            // creation de la boucle pour parcourir le tableau $cat correspond a 1 tableau de chaque boucle
            foreach($fetch as $cat){ ?>
                <article>
                    <h2><?= $cat['name']?></h2>
                    <a href=""><img src="./img-dessert/<?= $cat['vignette']?>" alt=""></a>
                </article>
            <?php } ?>
        </section><?php
// indique a la variable de prendre les informations et a remettre a 0 la valeur 
    $categorie = ob_get_clean();

    // recupere le fichier "template-header-footer.php" pour afficher le header et le footer
    require_once "template-header-footer.php";
    


