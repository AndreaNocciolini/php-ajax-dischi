<?php
include __DIR__ . '/../server/db.php';
?>

<div>
    <?php foreach ($cards as $card) { ?>
        <div class="card">
            <div class="card-top">
                <img src="<?= $card['poster'] ?>" alt="">
            </div>
            <div class="card-content">
                <h2><?= $card['title'] ?></h2>
                <h3><?= $card['author']?></h3>
                <h4><?= $card['year']?></h4>
            </div>
        </div>
    <?php } ?>
</div>