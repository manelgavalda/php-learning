<?php require __DIR__ .'/../core/partials/headers.php'; ?>

    <?php require 'menu.php' ?>

    <ul>
        <?php foreach ($persons as $person) : ?>
            <li>
            <?= $person->FirstName ?>
            </li>
        <?php endforeach;?>
    </ul>

<?php require __DIR__ .'/../core/partials/footers.php' ?>