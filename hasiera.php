<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php 
    include_once "header.php"; 
    ?>
    <div class="container">
        <h1><?= trans("ongietorri") ?></h1>
        <h2><?= trans("ordutegi") ?></h2>
        <ul>
            <li><?= trans("ordutegi1") ?></li>
            <li><?= trans("ordutegi2") ?></li>
            <li><?= trans("ordutegi3") ?></li>
        </ul>
            <h2><?= trans("prezioak") ?></h2>
            <ul>
                <li><?= trans("helduak") ?></li>
                <li><?= trans("umeak") ?></li>
                <li><?= trans("haurrak") ?></li>
            </ul>

            <h2><?= trans("arauak") ?></h2>
            <ul>
                <li><?= trans("arau1") ?></li>
                <li><?= trans("arau2") ?></li>
                <li><?= trans("arau3") ?></li>
                <li><?= trans("arau4") ?></li>
                <li><?= trans("arau5") ?></li>
                <li><?= trans("arau6") ?></li>
                <li><?= trans("arau7") ?></li>
                <li><?= trans("arau8") ?></li>
            </ul>

            <h2><?= trans("zerbitzuak") ?></h2>
            <ul>
                <li><?= trans("zerb1") ?></li>
                <li><?= trans("zerb2") ?></li>
                <li><?= trans("zerb3") ?></li>
                <li><?= trans("zerb4") ?></li>
                <li><?= trans("zerb5") ?></li>
            </ul>
    </div>
</body>
</html>