<?php include "templates/header.php";

$id = $_GET["id"];
$oeuvre = null;

include "data/oeuvres.php";

$oeuvre = isset($oeuvres[$id]) ? $oeuvres[$id] : null;

if ($oeuvre === null) {
    echo "<p>Œuvre introuvable. Vérifiez que l'ID est correct.</p>";
    include "includes/footer.php";
    exit();
}
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?php echo $oeuvre["image"]; ?>" alt="<?php echo $oeuvre["title"]; ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?php echo $oeuvre["title"]; ?></h1>
        <p class="description"><?php echo $oeuvre["artist"]; ?></p>
        <p class="description-complete">
            <?php echo $oeuvre["description"]; ?>
        </p>
    </div>
</article>

<?php include "templates/footer.php"; ?>