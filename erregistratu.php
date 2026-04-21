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
        <label for="izena"><?= trans("izena") ?></label><br>
        <input type="text" id="izena" name="izena"><br>
        <label for="abizena"><?= trans("abizena") ?></label><br>
        <input type="text" id="abizena" name="abizena"><br>
        <label for="telefonoa"><?= trans("telefonoa") ?></label><br>
        <input type="text" id="telefonoa" name="telefonoa"><br>
        <label for="posta"><?= trans("posta") ?></label><br>
        <input type="text" id="posta" name="posta"><br>
        <label for="pasahitza"><?= trans("pasahitza") ?></label><br>
        <input type="text" id="pasahitza" name="pasahitza"><br>
        <label for="nan"><?= trans("nan") ?></label><br>
        <input type="text" id="nan" name="nan"><br>
        <input type ="submit" class="loginBtn" value="<?= trans("erregistratu") ?>">
    </form>
    </div>
</body>
</html>