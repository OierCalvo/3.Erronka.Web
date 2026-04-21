<?php
include_once "header.php";
include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <h1><?= trans("Erreserbatu") ?></h1>
        <form action="erreserbaGauzatu.php" method="post">
            <label for="data"><?= trans("Data") ?>:</label><br>
            <input type="date" id="data" name="data"><br>
            <label for="ordua"><?= trans("Pertsonak") ?>:</label><br>
            <input type="number" id="pertsonak" name="pertsonak"><br>
            <input type="submit" value="<?= trans("Erreserbatu") ?>">
            <input type="hidden" name="id_ekitaldia" value="<?php echo $_GET['id']; ?>">
        </form>
    </div>
</body>
</html>