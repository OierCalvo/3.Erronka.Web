<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guri buruz</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<div class="home-wrapper">
    <!-- Hero Section -->
    <div class="home-hero">
        <h1><?= trans("H&H") ?></h1>
        <div class="hero-line"></div>
    </div>

    <!-- About Grid -->
    <div class="home-grid">
        
        <!-- History Card -->
        <div class="home-card">
            <div class="card-icon">📖</div>
            <h2><?= trans("historia") ?></h2>
            <div style="color: #d1e3f2; text-align: center; line-height: 1.8; margin-top: 10px;">
                <p style="margin-bottom: 15px; border-bottom: 1px dashed rgba(255,255,255,0.1); padding-bottom: 15px;"><?= trans("1968") ?></p>
                <p><?= trans("1970") ?></p>
            </div>
        </div>

        <!-- Founders Card -->
        <div class="home-card">
            <div class="card-icon">👥</div>
            <h2><?= trans("fundatzaileak") ?></h2>
            <ul>
                <li><?= trans("MAG") ?></li>
                <li><?= trans("MKI") ?></li>
                <li><?= trans("JAO") ?></li>
            </ul>
        </div>

        <!-- Mission Card -->
        <div class="home-card" style="grid-column: 1 / -1;">
            <div class="card-icon">🎯</div>
            <h2><?= trans("Helburua") ?></h2>
            <p style="text-align: center; color: #d1e3f2; max-width: 800px; margin: 0 auto; line-height: 1.8; padding: 20px;">
                <?= trans("helburuaP") ?>
            </p>
        </div>
        
    </div>

    <!-- Location Section -->
    <div class="home-hero" style="padding-top: 10px;">
        <h2>📍 Aurkitu gaitzazu</h2>
        <div class="hero-line" style="margin-bottom: 30px;"></div>
    </div>
    
    <div class="map-container" style="width: 100%; max-width: 1200px; padding: 0 20px 60px; box-sizing: border-box;">
        <div class="home-card" style="padding: 10px; overflow: hidden; border-radius: 16px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.7128900689604!2d-2.2062170852675207!3d43.06519617170141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd503697fd2704bf%3A0x3b4af2edd0781370!2sMonte%20Usurbe!5e1!3m2!1ses!2ses!4v1773645414428!5m2!1ses!2ses" height="450" style="border:0; width: 100%; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>

</body>
</html>