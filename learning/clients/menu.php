<?php
// code php
require_once('./db.php');

// connect to mysql
$pdo = connectDB();
$stmt = $pdo->query("SELECT * FROM menus");
$menus = $stmt->fetchAll();
?>

<ul>
    <?php foreach($menus as $menu): ?>
        <li>
            <a href="<?= $menu['url']; ?>">
                <?= $menu['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>