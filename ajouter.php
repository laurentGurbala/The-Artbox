<?php include "templates/header.php"; ?>

<form action="traitement.php" method="POST">
    <div class="champ-formulaire">
        <label for="titre">Titre de l'oeuvre</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div class="champ-formulaire">
        <label for="artiste">Auteur de l'oeuvre</label>
        <input type="text" name="artiste" id="artiste">
    </div>
    <div class="champ-formulaire">
        <label for="image">Url de l'image</label>
        <input type="url" name="image" id="image">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider">
</form>