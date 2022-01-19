<?php require_once "connect.php";

if(isset($_POST['submit'])){
    $titre = $_POST['titre']; 
    $ingredients = $_POST['ingredients']; 
    $photo = $_POST['photo']; 
    $preparation = $_POST['preparation']; 
    $art = $db->query("INSERT INTO `articles` (`titre`, `ingredients`, `photo`, `preparation`) VALUES ('$titre', '$ingredients', '$photo', '$preparation')");
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
            <input type="checkbox" id="catego" name="catego[]" value="biscuit">
            <label for="catego">Biscuits</label>
            <input type="checkbox" id="catego" name="catego[]" value="viennoiserie">
            <label for="catego">Viennoiseries</label>
            <input type="checkbox" id="catego" name="catego[]" value="gateaux">
            <label for="catego">Gâteaux</label>
            <input type="checkbox" id="catego" name="catego[]" value="cremes">
            <label for="catego">Crèmes, Mousse</label>
            <input type="checkbox" id="catego" name="catego[]" value="tartes">
            <label for="catego">Tartes</label>
            <input type="checkbox" id="horns" name="catego[]" value="glaces">
            <label for="catego">Glaces</label>
            <input type="checkbox" id="catego" name="catego[]" value="boissons">
            <label for="catego">Boissons</label>
            <input type="checkbox" id="catego" name="catego[]" value="autres">
            <label for="catego">Autres</label>
        </fieldset>
        <fieldset class="submit">
            <input type="submit" name="submit" value="Envoyer la recette">
        </fieldset>        
</form>
<?php 
$formulaire = ob_get_clean();

require_once "./assets/template-admin.php";