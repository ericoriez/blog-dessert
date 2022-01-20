<?php require_once "connect.php";

if(isset($_POST['submit'])){
    $titre = $_POST['titre']; 
    $ingredients = $_POST['ingredients']; 
    $photo = $_POST['photo']; 
    $preparation = $_POST['preparation']; 
    $cat = $_POST['catego'];
    $art = $db->query("INSERT INTO `articles` (`titre`, `ingredients`, `photo`, `preparation`) VALUES ('$titre', '$ingredients', '$photo', '$preparation')");
    $lastId = $db->lastInsertId();
    $pivot = $db->query("INSERT INTO `articles_categorie`(`id_articles`, `id_categorie`) VALUES ('$lastId', '$cat')");
    var_dump($cat); 
    var_dump($lastId);

}
ob_start();
?>
<form action="#" method="POST">
        <h2>Création</h2>
        <fieldset>
            <label class="labels" for="titre">Titre</label>
            <input type="text" id="titre" name="titre" required size="10">
            <label class="labels" for="ingredients">Ingrédients</label>
            <input type="text" id="ingredients" name="ingredients" required size="30">
            <label class="labels" for="photo">Choix de photo:</label>
            <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
            <label class="labels" for="preparation">Préparation</label>
            <input type="text" id="preparation" name="preparation" required size="50">
        </fieldset>
        <fieldset>
            <p>Choix de la catégorie:</p>
            <input type="radio" id="catego" name="catego" value="1">
            <label for="catego">Biscuits</label>
            <input type="radio" id="catego" name="catego" value="2">
            <label for="catego">Viennoiseries</label>
            <input type="radio" id="catego" name="catego" value="3">
            <label for="catego">Gâteaux</label>
            <input type="radio" id="catego" name="catego" value="4">
            <label for="catego">Crèmes, Mousse</label>
            <input type="radio" id="catego" name="catego" value="5">
            <label for="catego">Tartes</label>
            <input type="radio" id="horns" name="catego" value="6">
            <label for="catego">Glaces</label>
            <input type="radio" id="catego" name="catego" value="7">
            <label for="catego">Boissons</label>
            <input type="radio" id="catego" name="catego" value="8">
            <label for="catego">Autres</label>
        </fieldset>
        <fieldset class="submit">
            <input type="submit" name="submit" value="Envoyer la recette">
        </fieldset>        
</form>
<?php 
$formulaire = ob_get_clean();

require_once "./assets/template-admin.php";