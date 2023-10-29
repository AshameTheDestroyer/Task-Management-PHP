<?php
require("./lib/functions/InputField.php");

$doesntHaveAccount = filter_input(INPUT_GET, "doesnt_have_account", FILTER_SANITIZE_NUMBER_INT);
?>

<?php include("./view/layout/layout_top.php") ?>

<main id="signing-page">
    <form action="./model/authentication.php" method="POST">
        <?php if ($doesntHaveAccount): ?>
            <?= InputField(id: "action", type: "hidden", value: "sign_up") ?>

            <?= InputField(id: "username", label: "Username", maxLength: 32) ?>
            <?= InputField(id: "name", label: "Name", maxLength: 16) ?>
            <?= InputField(id: "middle-name", label: "Middle Name", maxLength: 16, isOptional: true) ?>
            <?= InputField(id: "surname", label: "Surname", maxLength: 16) ?>
            <?= InputField(id: "birthday", label: "Birthday", type: "date") ?>
            <?= InputField(id: "password", label: "Password", type: "password") ?>
            <?= InputField(id: "confirm-password", label: "Confirm Password", type: "password") ?>
        <?php else: ?>
            <?= InputField(id: "action", type: "hidden", value: "login") ?>

            <?= InputField(id: "username", label: "Username"); ?>
            <?= InputField(id: "password", label: "Password", type: "password"); ?>
        <?php endif ?>

        <div class="button-displayer">
            <button type="reset">Reset</button>
            <button type="submit">
                <?= $doesntHaveAccount ? "Sign up" : "Login" ?>
            </button>
        </div>
    </form>

    <form action="./" method="GET">
        <?php if ($doesntHaveAccount): ?>
            <button type="submit">Already signed in?</button>
        <?php else: ?>
            <?= InputField(id: "doesnt-have-account", type: "hidden", value: "1") ?>
            <button type="submit">Doesn't have an account?</button>
        <?php endif ?>
    </form>
</main>

<?php include("./view/layout/layout_bottom.php") ?>