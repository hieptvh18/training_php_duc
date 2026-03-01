<?php
// định nghĩa thông tin kết nối
function connectDB (){
    $host = 'localhost';
    $dbName = 'php_ecommerce';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        throw new $e;
    }
}