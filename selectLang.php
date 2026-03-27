
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<form method="post">
    <select name="selectedLang" class="lang-select">
        <option value="eus" <?php
        if (isset($_POST["selectedLang"]) && $_POST["selectedLang"] == "eus") {
            echo "selected";
        }
        else if (!isset($_POST["selectedLang"]) && isset($_SESSION["_LANGUAGE"]) && $_SESSION["_LANGUAGE"] == "eus") {
            echo "selected";
        }
        ?>> EUS</option>
        <option value="es" <?php
        if (isset($_POST["selectedLang"]) && $_POST["selectedLang"] == "es") {
            echo "selected";
        }
        else if (!isset($_POST["selectedLang"]) && isset($_SESSION["_LANGUAGE"]) && $_SESSION["_LANGUAGE"] == "es") {
            echo "selected";
        }
        ?>> ES</option>
    </select>
    <button class="langBtn" name="gorde"><?= trans("aldatu") ?></button>
</form> 
<?php
if(isset($_POST["gorde"])){

    $_SESSION["_LANGUAGE"] = $_POST["selectedLang"];

    if(isset($_SESSION["erab"]) && isset($_SESSION["_LANGUAGE"])){

        $erabiltzailea = $_SESSION["erab"];
        $hizkuntza = $_SESSION["_LANGUAGE"];
        $xml = simplexml_load_file("hizkuntzak.xml");
        $aurkituta = false;

        foreach($xml->bezeroa as $b){
            if((string)$b["erabiltzailea"] == $erabiltzailea){
                $b->hizkuntza = $hizkuntza;
                $aurkituta = true;
            }
        }

        if(!$aurkituta){
            $bezeroa = $xml->addChild("bezeroa");
            $bezeroa->addAttribute("erabiltzailea",$erabiltzailea);
            $bezeroa->addChild("hizkuntza",$hizkuntza);
        }

        $xml->asXML("hizkuntzak.xml");
    }
}
?>
</body>
</html>
