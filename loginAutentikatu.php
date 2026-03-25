<?php

include_once "db.php";


$erabiltzailea = $_POST["erab"];
$pasahitza = $_POST["pas"];

$stmt = $pdo->query("SELECT * FROM bezeroak");

foreach($stmt as $row){
    if($erabiltzailea == $row["email"] && $pasahitza == $row["pasahitza"]){
        header("Location:hasiera.php");
        exit();
    }
}
header("Location:login.php?error=1");
exit();

?>