<?php
require_once('../db.php');

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
</head>
<body>
    <h1>Danh sách menu</h1>
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
                            <a href="">Edit</a>
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
</body>
</html>


