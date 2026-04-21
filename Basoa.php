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
    <div class="tropikala-container">
    <?php
        $habitat_id = $_GET["id"];
        if($_SESSION["_LANGUAGE"] == "eus"){
        $stmt = $pdo->query("SELECT * FROM animaliak WHERE id_habitata = $habitat_id");
        foreach($stmt as $row){
            echo "<div>";
            echo "<h1>" . $row['espeziea'] . "</h1>";
            echo "<img src='irudiak/" . $row['irudiak'] . "' />";
            echo "<p>" . $row["deskribapena"] . "</p>";
            echo "</div>";
        }
        }
    ?>
    </div>
</body>
</html>