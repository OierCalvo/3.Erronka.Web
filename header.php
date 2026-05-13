<?php
    include_once "translations.php";
?>
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
            <div class="hizkuntza">
            <?php
                include "selectLang.php";
            ?>
            </div>
        </div>

        <div class="mobile">
            <button class="openbtn" id="openMenuBtn">☰</button>

            <div class="sidebar" id="mySidebar">
                <a href="javascript:void(0)" class="closebtn" id="closeMenuBtn">×</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#openMenuBtn').click(function() {
                $('#mySidebar').addClass('active');
            });

            $('#closeMenuBtn').click(function(){
                $('#mySidebar').removeClass('active');
            });
        });
    </script>