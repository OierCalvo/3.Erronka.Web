<?php
include_once "db.php";

$izena = $_POST["izena"];
$abizena = $_POST["abizena"];
$telefonoa = $_POST["telefonoa"];
$posta = $_POST["posta"];
$pasahitza = $_POST["pasahitza"];
$nan = $_POST["nan"];

$sql = "INSERT INTO bezeroak (izena, abizena, telefonoa, posta_elektronikoa, pasahitza, nan) VALUES (:izena, :abizena, :telefonoa, :posta, :pasahitza, :nan)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':izena' => $izena,
    ':abizena' => $abizena,
    ':telefonoa' => $telefonoa,
    ':posta' => $posta,
    ':pasahitza' => $pasahitza,
    ':nan' => $nan
]);

header("Location: hasiera.php");
exit();
?>
