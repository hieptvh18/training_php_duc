<?php

require_once('../config/db.php');

// connect to mysql
$pdo = connectDB();
$id = $_GET["id"];

try {
    $stmt = $pdo->query("SELECT * FROM menus WHERE id = " . $id);
    $menu = $stmt->fetch();
} catch (\Exception $e) {
    // Log error message to
    header("Location: list_menu.php");
    exit();
}

if (!$menu) {
    header("Location: list_menu.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <div class="wrapper">

        <?php include_once('../layout/sidebar.php') ?>

        <div class="cotnent">
            <h1>Edit Menu</h1>

                <form action="handle_edit_menu.php" method="POST">
                    <input type="hidden" name="id" value="<?= $menu['id'] ?>"/>
                    <label>Tên menu</label>
                    <input type="text" name="name" value="<?= $menu['name'] ?>" placeholder="Nhập tên menu" required/>
                    <br>
                    <label>Link menu</label>
                    <input type="url" name="url" value="<?= $menu['url'] ?>" placeholder="Nhập url"/>
                    <br>

                    <button type="submit">Submit</button>
                </form>
        </div>
    </div>
</body>
</html>
