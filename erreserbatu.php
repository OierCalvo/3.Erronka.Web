<?php
include_once "header.php";
include_once "db.php";

// Capturar el id del evento
$id_ekitaldia = isset($_GET['id']) ? $_GET['id'] : (isset($_GET['id_ekitaldia']) ? $_GET['id_ekitaldia'] : '');

if(empty($id_ekitaldia)) {
    die("Error: No se ha recibido el ID del evento. Vuelve atrás e intenta de nuevo.");
}
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
        <form action="erreserbatu.php" method="GET">
            <label for="ordua"><?= trans("Pertsonak") ?>:</label><br>
            <input type="number" id="pertsonak" name="pertsonak">
            <input type="hidden" name="id" value="<?= htmlspecialchars($id_ekitaldia) ?>">
            <input type="submit" value="<?= trans("Bidali") ?>"><br>
        </form>
        <form action="erreserbaGauzatu.php" method="post">
        <?php
            if(isset($_GET["pertsonak"])){
            $pertsonak = $_GET["pertsonak"];
            if($pertsonak == 5){
              echo "<label for='adina1'>" . trans('pr1') . "</label><br>";
            echo "<input type='number' id='adina1' name='adina1'><br>";
            echo "<label for='adina2'>" .  trans('pr2') . "</label><br>";
            echo "<input type='number' id='adina2' name='adina2'><br>";
            echo "<label for='adina3'>" .  trans('pr3') . "</label><br>";
            echo "<input type='number' id='adina3' name='adina3'><br>";
            echo "<label for='adina4'>" . trans('pr4') . "</label><br>";
            echo "<input type='number' id='adina4' name='adina4'><br>";
            echo "<label for='adina5'>" . trans('pr5') . "</label><br>";
            echo "<input type='number' id='adina5' name='adina5'><br>";  
            }else if($pertsonak == 4){
            echo "<label for='adina1'>" . trans('pr1') . "</label><br>";
            echo "<input type='number' id='adina1' name='adina1'><br>";
            echo "<label for='adina2'>" .  trans('pr2') . "</label><br>";
            echo "<input type='number' id='adina2' name='adina2'><br>";
            echo "<label for='adina3'>" .  trans('pr3') . "</label><br>";
            echo "<input type='number' id='adina3' name='adina3'><br>";
            echo "<label for='adina4'>" . trans('pr4') . "</label><br>";
            echo "<input type='number' id='adina4' name='adina4'><br>";
            }else if($pertsonak == 3){
            echo "<label for='adina1'>" . trans('pr1') . "</label><br>";
            echo "<input type='number' id='adina1' name='adina1'><br>";
            echo "<label for='adina2'>" .  trans('pr2') . "</label><br>";
            echo "<input type='number' id='adina2' name='adina2'><br>";
            echo "<label for='adina3'>" .  trans('pr3') . "</label><br>";
            echo "<input type='number' id='adina3' name='adina3'><br>";  
            }else if($pertsonak == 2){
            echo "<label for='adina1'>" . trans('pr1') . "</label><br>";
            echo "<input type='number' id='adina1' name='adina1'><br>";
            echo "<label for='adina2'>" .  trans('pr2') . "</label><br>";
            echo "<input type='number' id='adina2' name='adina2'><br>";
            }else if($pertsonak == 1){
            echo "<label for='adina1'>" . trans('pr1') . "</label><br>";
            echo "<input type='number' id='adina1' name='adina1'><br>";
            }else{
            echo "";
            }
            }
            ?>
            <label for="data"><?= trans("Data") ?>:</label><br>
            <input type="date" id="data" name="data"><br>
            <input type="submit" value="<?= trans("Erreserbatu") ?>">
            <input type="hidden" name="id_ekitaldia" value="<?= htmlspecialchars($id_ekitaldia) ?>">
            <input type="hidden" name="pertsonak" value="<?= $_GET['pertsonak'] ?? '' ?>">

        </form>
    </div>
</body>
</html>