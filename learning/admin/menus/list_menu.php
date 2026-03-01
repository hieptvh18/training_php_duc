<?php
require_once('../config/db.php');
session_start();

// connect to mysql
$pdo = connectDB();
$stmt = $pdo->query("SELECT * FROM menus");
$menus = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach menu</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <div class="wrapper">

        <?php include_once('../layout/sidebar.php') ?>

        <div class="content">
            <h1>Danh sách menu</h1>
            <div class="alert-message">
                <?php
                    if (isset($_SESSION['save_success'])) {
                        echo "<p class='alert alert-success'>" . $_SESSION['save_success'] . "</p>";
                        unset($_SESSION['save_success']);
                    }
                ?>
            </div>
            <div>
                <table border="1">
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>Tên menu</td>
                            <td>Url menu</td>
                            <td>Hành động</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $index = 1;
                        ?>
                        <?php foreach ($menus as $menu): ?>
                            <tr>

                                <td><?= $index ?></td>
                                <td><?= $menu['name'] ?></td>
                                <td><?= $menu['url'] ?></td>
                                <td>
                                    <a href="./edit_menu.php?id=<?= $menu['id'] ?>">Edit</a>
                                    <br>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            <?php
                                $index += 1;
                            ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>


