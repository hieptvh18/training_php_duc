<?php
require_once "../../admin/config/db.php";
session_start();

if (!empty($_POST)) {
    $pdo = connectDB();

    // get data from form
    $name = $_POST['name'];
    $url = $_POST['url'];

    try {
        $id = $_POST['id'];

        // check id exist
        if (!$id) {
            header("Location: ./list_menu.php");
            exit;
        }

        // check id is valid
        $stmt = $pdo->query("SELECT * FROM menus WHERE id = " . $id);
        $menu = $stmt->fetch();

        if (!$menu) {
            header("Location: ./list_menu.php");
            exit;
        }

        $sql = "UPDATE menus SET name = '$name', url = '$url' WHERE id = " . $id;
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // save flash session message
        $_SESSION['save_success'] = "Cập nhật menu thành công!";

        header("Location: ./list_menu.php");
        exit;
    }catch (PDOException $e){
        header("Location: ./list_menu.php");
        exit;
    }
}

