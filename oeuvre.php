<?php include "includes/header.php";

$id = $_GET["id"];
$oeuvre = null;

include "includes/oeuvres.php";

foreach ($oeuvres as $o) {
    if ($o["id"] == $id) {
        $oeuvre = $o;
        break;
    }
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

<?php include "includes/footer.php"; ?>