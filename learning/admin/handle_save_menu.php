<?php
require_once "../db.php";

if (!empty($_POST)) {
    $pdo = connectDB();

    // get data from form
    $name = $_POST['name'];
    $url = $_POST['url'];

    try {
        $sql = "INSERT INTO menus (name, url) VALUES ('$name', '$url')";
        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        header("Location: ../index.php");
        exit;
    }catch (PDOException $e){
        var_dump($e);
        echo 'Lưu thất bại!';
    }
}

