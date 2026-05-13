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
    include_once "db.php";
    ?>
    <div class="container">
        <h1><?= trans("ongietorri") ?></h1>

        <h2><?= trans("ikusiAnimaliak") ?></h2>

<div class="carousel-container">
        <button class="carousel-btn prev" id="prevBtn">❮</button>
        <div class="carousel-wrapper">
            <div class="carousel">
                <?php
                    if($_SESSION["_LANGUAGE"] == "eus"){
                        $stmt = $pdo->query("SELECT * FROM animaliak ");
                    } else if($_SESSION["_LANGUAGE"] == "es"){
                        $stmt = $pdo->query("SELECT * FROM animaliak_es");
                    }
                    
                    foreach($stmt as $row){
                        echo '<div class="carousel-slide">';
                        echo '<img class="carousel-img" src="irudiak/' . $row['irudiak'] . '">';
                        echo '<div class="carousel-info">';
                        echo '<p class="carousel-title">' . $row['espeziea'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
        <button class="carousel-btn next" id="nextBtn">❯</button>
    </div>

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
    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const carousel = $('.carousel');
            const slides = $('.carousel-slide');
            const slideCount = slides.length;

            function updateCarousel() {
                const offset = -currentIndex * 100;
                carousel.css('transform', 'translateX(' + offset + '%)');
            }

            $('#nextBtn').on('click', function() {
                currentIndex = (currentIndex + 1) % slideCount;
                updateCarousel();
            });

            $('#prevBtn').on('click', function() {
                currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                updateCarousel();
            });
        });
    </script>
</body>
</html>