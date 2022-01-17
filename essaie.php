<?php require_once "connect.php";

   $req = $db->query("SELECT `id_categorie`, `name`, `vignette` FROM `categorie`");
   $categories = $req->fetchAll(PDO::FETCH_ASSOC);
   foreach($categories as $value){ ?>
      <h2><?= $value['name']?></h2>
      <a href=""><img src="./img-dessert/<?= $value['vignette']?>" alt=""></a>
      <?php
   }?>