<?php
$title = "Task Management";
$description = "An app to manage tasks.";

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_STRING);

require("./model/database.php");
require("./model/authentication.php");

if ($action == null) {
    goto SKIP_ACTION;
}

switch ($action) {
    case "create":
    case "insert":
        break;
    case "read":
    case "select":
        break;
    case "update":
        break;
    case "delete":
        break;
}
return;

SKIP_ACTION:
?>

<?php include("./view/layout/layout_top.php") ?>

<main id="main-page">

</main>

<?php include("./view/layout/layout_bottom.php") ?>