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
            <?php
            if(isset($_SESSION["erab"])){
            echo "<a style='margin:0' href='logout.php'><button class='sh'>" . trans("logout") . "</button></a>";
            }else{
            echo "<a style='margin:0' href='erregistratu.php'><button class='sh'> " .  trans("erregistratu") . "</button></a>";
            echo "<a style='margin:0' href='login.php'><button class='sh'> " .  trans("login") . "</button></a>";
            }
            ?>
            <?php
                include "selectLang.php";
            ?>
        </div>

        <div class="mobile">
    <button class="openbtn" onclick="openNav()">☰ </button>

    <div class="sidebar" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <?php
            if(isset($_SESSION["erab"])){
            echo "<a href='logout.php'><button class='sh'>" . trans("logout") . "</button></a>";
            }else{
            echo "<a href='login.php'><button class='sh'> " .  trans("login") . "</button></a>";
            echo "<a href='erregistratu.php'><button class='sh'> " .  trans("erregistratu") . "</button></a>";
            }
        ?>
        <?php
        include "selectLang.php";
        ?>
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