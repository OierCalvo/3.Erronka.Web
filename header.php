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
            <a href="hasiera.php">Hasiera</a>
            <a href="guri_buruz.php">Guri buruz</a>
            <a href="habitatak.php">Habitatak</a>
            <a href="ekitaldiak.php">Ekitaldiak</a>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/019/787/018/small/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.png" height="40px" width="60px"/>
            <a href="login.php"><button class="sh">Saioa hasi</button></a>
        </div>

        <div class="mobile">
    <button class="openbtn" onclick="openNav()">☰ </button>

    <div class="sidebar" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <a href="login.php"><button class="sh">Saioa hasi</button></a>
        <a href="hasiera.php">Hasiera</a>
        <a href="guri_buruz.php">Guri buruz</a>
        <a href="habitatak.php">Habitatak</a>
        <a href="ekitaldiak.php">Ekitaldiak</a>
    </div>
    <img src="https://static.vecteezy.com/system/resources/thumbnails/019/787/018/small/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.png" height="40px" width="60px"/>
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