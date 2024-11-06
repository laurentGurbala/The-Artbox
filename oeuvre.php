<?php
include "templates/header.php";
include "data/bdd.php";

$bdd = connexion();

// Si l'url ne contient pas d'id
// redirection sur la page d'accueil
if (empty($_GET["id"])) {
    header("Location: index.php");
}

$requete = $bdd->prepare("SELECT * FROM oeuvres WHERE id = ?");
$requete->execute([$_GET["id"]]);
$oeuvre = $requete->fetch();

// Si l'oeuvre n'existe pas,
// redirection vers l'accueil
if (!$oeuvre) {
    header("Location: index.php");
}
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?php echo $oeuvre["image"]; ?>" alt="<?php echo $oeuvre["title"]; ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?php echo $oeuvre["title"]; ?></h1>
        <p class="description"><?php echo $oeuvre["artiste"]; ?></p>
        <p class="description-complete">
            <?php echo $oeuvre["description"]; ?>
        </p>
    </div>
</article>

<?php include "templates/footer.php"; ?>