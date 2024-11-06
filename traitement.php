<pre>

<?php

require_once 'data/bdd.php';

if (
    empty($_POST['titre'])
    || empty($_POST['artiste'])
    || empty($_POST['description'])
    || empty($_POST['image'])
    || strlen($_POST['description']) < 3
    || !filter_var($_POST['image'], FILTER_VALIDATE_URL)
) {
    header('Location: ajouter.php?erreur=true');
} else {
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $artiste = htmlspecialchars($_POST['artiste']);
    $image = htmlspecialchars($_POST['image']);

    // Insertion à la bdd
    $bdd = connexion();

    print_r($_POST);
    $requete = $bdd->prepare('INSERT INTO oeuvres (title, description, artiste, image) VALUES (?, ?, ?, ?)');
    $requete->execute([$titre, $description, $artiste, $image]);

    header('Location: oeuvre.php?id=' . $bdd->lastInsertId());
}
?>
</pre>