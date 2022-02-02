<?php
include __DIR__ . '/../server/db.php';
?>

<div class="card-container d-flex row row-cols-5 p-3 g-3">
    <?php foreach ($cards as $card) { ?>
        <div class="card-divider">
            <div class="my-card col p-3 h-100">
                <div class="card-top">
                    <img src="<?= $card['poster'] ?>" alt="">
                </div>
                <div class="card-content d-flex flex-column text-center">
                    <h2><?= $card['title'] ?></h2>
                    <h3><?= $card['author'] ?></h3>
                    <h4><?= $card['year'] ?></h4>
                </div>
            </div>
        </div>
    <?php } ?>
</div>