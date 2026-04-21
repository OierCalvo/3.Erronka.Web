<?php
include_once "db.php";
session_start();
$id_bezeroa = $_SESSION["id"];
$id_ekitaldia = $_POST["id_ekitaldia"];
$data = $_POST["data"];
$pertsonak = $_POST["pertsonak"];

$sql = "INSERT INTO erreserbak (id_bezeroa, id_ekitaldia, data, plaza_kopurua) VALUES (:id_bezeroa, :id_ekitaldia, :data, :plaza_kopurua)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':id_bezeroa' => $id_bezeroa,
    ':id_ekitaldia' => $id_ekitaldia,
    ':data' => $data,
    ':plaza_kopurua' => $pertsonak
]);

header("Location: hasiera.php");
exit();
?>