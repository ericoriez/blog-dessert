<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brownie Factory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="headerNav">
             <figure id="logo"><img src="./img-dessert/logo.png" alt=""></figure>
             <a href="#">Connexion</a>
        </div>
        <h1>Pâtisserie</h1>
    </header>
    <main>
        <?php require_once 'connect.php';
            
            $name = $_GET['categorie'];
            
            $req = $db->query("SELECT * FROM `categorie` WHERE `name` = '$name'");
            $cate = $req->fetch(PDO::FETCH_ASSOC);?>

            <img src="./img-dessert/<?= $cate['vignette']?>" alt="">
            <h2><?= $cate['name']?></h2>
        
    </main>
    <footer>

    </footer>
</body>
</html>