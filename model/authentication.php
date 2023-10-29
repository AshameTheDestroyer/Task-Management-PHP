<?php
$username = filter_input(INPUT_COOKIE, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_COOKIE, "password", FILTER_SANITIZE_STRING);

if ($username == null || $password == null) {
    goto FAIL;
}

$query = "SELECT * FROM users WHERE username = :username AND password = :password";
$statement = $database->prepare($query);

$statement->bindValue(":username", $username);
$statement->bindValue(":password", $password);

$success = $statement->execute();
$user = $statement->fetch();
$statement->closeCursor();

FAIL:
if (!$success) {
    require("./view/pages/signing.php");
    exit();
}
?>