<?php
include_once "db.php";
$id_ekitaldia = $_GET["id"];
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
    <?php 
    include_once "header.php"; 
    ?>
    <div class="form-container">
        <h1><?= trans("Erreserbatu") ?></h1>
        <form action="erreserbatu.php" method="GET">
            <?php
            if(!isset($_GET["pertsonak"])){
            echo "<label for='pertsonak'>" . trans("Pertsonak") . ":</label>";
            echo "<input type='number' id='pertsonak' name='pertsonak' min='1' max='5' required>";
            echo "<input type='hidden' name='id' value='" . $id_ekitaldia . "'>";
            echo "<input class='bidali' type='submit' value='" . trans("Bidali") . "'>";
            }
            ?>
            
        </form>
        <form action="erreserbaGauzatu.php" method="post">
        <?php
            if(isset($_GET["pertsonak"])){
            $pertsonak = $_GET["pertsonak"];
            if($pertsonak == 5){
              for($i = 1; $i <= 5; $i++){
                echo "<label for='adina" . $i . "'>" . trans('pr' . $i) . "</label>";
                echo "<input type='number' id='adina" . $i . "' name='adina" . $i . "' min='0' required>";
              }
            }else if($pertsonak == 4){
              for($i = 1; $i <= 4; $i++){
                echo "<label for='adina" . $i . "'>" . trans('pr' . $i) . "</label>";
                echo "<input type='number' id='adina" . $i . "' name='adina" . $i . "' min='0' required>";
              }
            }else if($pertsonak == 3){
              for($i = 1; $i <= 3; $i++){
                echo "<label for='adina" . $i . "'>" . trans('pr' . $i) . "</label>";
                echo "<input type='number' id='adina" . $i . "' name='adina" . $i . "' min='0' required>";
              }
            }else if($pertsonak == 2){
              for($i = 1; $i <= 2; $i++){
                echo "<label for='adina" . $i . "'>" . trans('pr' . $i) . "</label>";
                echo "<input type='number' id='adina" . $i . "' name='adina" . $i . "' min='0' required>";
              }
            }else if($pertsonak == 1){
                echo "<label for='adina1'>" . trans('pr1') . "</label>";
                echo "<input type='number' id='adina1' name='adina1' min='0' required>";
            }
            }
            ?>
            <label for="data"><?= trans("Data") ?>:</label>
            <input type="date" id="data" name="data" required>
            <input class="bidali" type="submit" value="<?= trans("Erreserbatu") ?>">
            <input type="hidden" name="id_ekitaldia" value="<?= $id_ekitaldia ?>">
            <input type="hidden" name="pertsonak" value="<?= $_GET['pertsonak'] ?? '' ?>">

        </form>
    </div>
</body>
</html>