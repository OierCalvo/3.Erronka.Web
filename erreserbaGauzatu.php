<?php
include_once "db.php";
session_start();

$id_bezeroa = $_SESSION["id"];
$id_ekitaldia = $_POST["id_ekitaldia"];
$data = $_POST["data"];
$pertsonak = $_POST["pertsonak"];
$prezioa = 0;
function kalkulatuPrezioa($adina){
    if($adina < 3){
        return 0;
    } else if($adina < 12){
        return 10;
    } else {
        return 15;
    }
}
if(isset($_POST["adina1"])){
    $adina1 = $_POST["adina1"];
}
if(isset($_POST["adina2"])){
    $adina2 = $_POST["adina2"];
}
if(isset($_POST["adina3"])){
    $adina3 = $_POST["adina3"];
}
if(isset($_POST["adina4"])){
    $adina4 = $_POST["adina4"];
}
if(isset($_POST["adina5"])){
    $adina5 = $_POST["adina5"];
}
$adinaBezero = 0;
if(isset($_SESSION["adina"])){
    $adinaBezero = $_SESSION["adina"];
}

$prezioa += kalkulatuPrezioa($adinaBezero);

if(isset($adina1)){
    $prezioa += kalkulatuPrezioa($adina1);
}
if(isset($adina2)){
    $prezioa += kalkulatuPrezioa($adina2);
}
if(isset($adina3)){
    $prezioa += kalkulatuPrezioa($adina3);
}
if(isset($adina4)){
    $prezioa += kalkulatuPrezioa($adina4);
}
if(isset($adina5)){
    $prezioa += kalkulatuPrezioa($adina5);
}


$sql = "INSERT INTO erreserbak (id_bezeroa, id_ekitaldia, data, plaza_kopurua,prezioa) VALUES (:id_bezeroa, :id_ekitaldia, :data, :plaza_kopurua, :prezioa)";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        ':id_bezeroa' => $id_bezeroa,
        ':id_ekitaldia' => $id_ekitaldia,
        ':data' => $data,
        ':plaza_kopurua' => $pertsonak,
        ':prezioa' => $prezioa
    ]);
    header("Location: hasiera.php");
    exit();
} catch (Exception $e) {
    die("Error en la reserva: " . $e->getMessage());
}
exit();
?>