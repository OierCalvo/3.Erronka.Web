<?php
session_start();
include_once "db.php";


$erabiltzailea = $_POST["erab"];
$pasahitza = $_POST["pas"];

$stmt = $pdo->query("SELECT * FROM bezeroak");

foreach($stmt as $row){

    if ($erabiltzailea == $row["posta_elektronikoa"] && $pasahitza == $row["pasahitza"]) {
    $_SESSION['erab'] = $_POST["erab"];
    $_SESSION['id'] = $row["id"];
    $_SESSION['adina'] = $row["adina"];
    header("Location: hasiera.php");
    exit();
}
}
header("Location:login.php?error=1");
exit();

?>