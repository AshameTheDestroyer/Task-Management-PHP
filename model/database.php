<?php
$dataSourceName = "mysql:host=localhost;dbname=task_management";
$user = "root";
$password = "";
$database;

try {
    $database = new PDO($dataSourceName, $user, $password);
} catch (PDOException $e) {
    $errorMessage = "Database Error: " . $e->getMessage();
    include("./view/pages/error.php");
    exit();
}
?>