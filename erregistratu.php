<?php
include_once "header.php";
include_once "translations.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-form">
    <form action="erregistroaSortu.php" method="POST">
        <label for="erabiltzailea"><?= trans("erab") ?></label><br>
        <input type="text" id="erabiltzailea" name="erab"><br>
        <label for="pasahitza"><?= trans("pas") ?></label><br>
        <input type="password" id="pasahitza" name="pas"><br>
        <input type ="submit" class="loginBtn" value="<?= trans("val") ?>">
    </form>
    </div>
</body>
</html>