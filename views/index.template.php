<?php require 'menu.php' ?>

<?php require '../core/partials/headers.php' ?>

Lorem.
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?= $task->description ?>
        </li>
    <?php endforeach;?>
</ul>

<?php require '../core/partials/footers.php' ?>
