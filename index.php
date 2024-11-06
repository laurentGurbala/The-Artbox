<?php include "templates/header.php"; ?>
<?php require_once "data/bdd.php";

$bdd = connexion();

$oeuvresStatement = $bdd->prepare("SELECT * FROM oeuvres");
$oeuvresStatement->execute();
$oeuvres = $oeuvresStatement->fetchAll();
?>


<div id="liste-oeuvres">
    <?php foreach ($oeuvres as $oeuvre): ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['title']; ?>">
                <h2><?php echo $oeuvre['title']; ?></h2>
                <p class="description"><?php echo $oeuvre['artiste']; ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>

<?php include "templates/footer.php"; ?>