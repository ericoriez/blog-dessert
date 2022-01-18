<?php require_once "connect.php";
$art = $db->query("SELECT `id_article`, `titre`, `ingredients`, `photo`, `preparation`, FROM `articles`");
?>


<form action="">
        <fieldset>
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" required size="10">
            <label for="ingredients">Ingrédients</label>
            <input type="text" id="ingredients" name="ingredients" required size="30">
            <label for="photo">Choix de photo:</label>
            <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
            <label for="preparation">Préparation</label>
            <input type="text" id="preparation" name="preparation" required size="50">
        </fieldset>
        <fieldset>
            <p>Choix de la catégorie:</p>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Biscuits</label>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Viennoiseries</label>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Gâteaux</label>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Crèmes, Mousse</label>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Tartes</label>
            <input type="checkbox" id="horns" name="catego">
            <label for="catego">Glaces</label>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Boissons</label>
            <input type="checkbox" id="catego" name="catego">
            <label for="catego">Autres</label>
        </fieldset>
        <fieldset>
            <input type="submit" value="Envoyer la recette">
        </fieldset>        
</form>
