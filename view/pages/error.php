<?php
$title = "Error Occurred";
$description = "An unexpected error has occurred.";
?>

<?php include("./view/layout/layout_top.php") ?>

<main id="error-page">
    <h1>Error Occurred</h1>
    <h3>An unexpected error has occurred.</h3>
    <details>
        <summary>Click for details...</summary>
        <p>
            <?= $errorMessage ?>
        </p>
    </details>
</main>

<?php include("./view/layout/layout_bottom.php") ?>