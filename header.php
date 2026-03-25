<?php
    include_once "translations.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <div class="header">
            <a href="hasiera.php"><?= trans("hasiera") ?></a>
            <a href="guri_buruz.php"><?= trans("guri_buruz") ?></a>
            <a href="habitatak.php"><?= trans("habitatak") ?></a>
            <a href="ekitaldiak.php"><?= trans("ekitaldiak") ?></a>
            <a href="login.php"><button class="sh"><?= trans("login") ?></button></a>
            <?php
                include "selectLang.php";
            ?>
        </div>

        <div class="mobile">
    <button class="openbtn" onclick="openNav()">☰ </button>

    <div class="sidebar" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <?php
        include "selectLang.php";
        ?>
        <a href="login.php"><button class="sh"><?= trans("login") ?></button></a>
        <a href="hasiera.php"><?= trans("hasiera") ?></a>
        <a href="guri_buruz.php"><?= trans("guri_buruz") ?></a>
        <a href="habitatak.php"><?= trans("habitatak") ?></a>
        <a href="ekitaldiak.php"><?= trans("ekitaldiak") ?></a>
    </div>
</div>
    </header>
    <script>

        function openNav() {
            document.getElementById("mySidebar").style.width = "75%";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }

        

    </script>
</body>
</html>