<?php
include_once "db.php";

$izena = $_POST["izena"];
$abizena = $_POST["abizena"];
$telefonoa = $_POST["telefonoa"];
$posta = $_POST["posta"];
$pasahitza = $_POST["pasahitza"];
$adina = $_POST["adina"];

$sql = "INSERT INTO bezeroak (izena, abizena, telefonoa, posta_elektronikoa, pasahitza, adina) VALUES (:izena, :abizena, :telefonoa, :posta, :pasahitza, :adina)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':izena' => $izena,
    ':abizena' => $abizena,
    ':telefonoa' => $telefonoa,
    ':posta' => $posta,
    ':pasahitza' => $pasahitza,
    ':adina' => $adina
]);

header("Location: hasiera.php");
exit();
?>
