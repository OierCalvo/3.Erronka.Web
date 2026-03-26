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
        <!-- PHPko logika honekin formularioan zein hizkuntza agertzen den aukeratuta erabakiko dugu -->
        <option value="eus" <?php
        //formulariotik aukeratutako hizkuntza euskara bada
        if (isset($_POST["selectedLang"]) && $_POST["selectedLang"] == "eus") {
            echo "selected";
        }
        //formulariotik ez bada hizkuntzarik aukeratu eta sesioan euskara badago
        else if (!isset($_POST["selectedLang"]) && isset($_SESSION["_LANGUAGE"]) && $_SESSION["_LANGUAGE"] == "eus") {
            echo "selected";
        }
        ?>> EUS</option>
        <option value="es" <?php
        //formulariotik aukeratutako hizkuntza gaztelera bada
        if (isset($_POST["selectedLang"]) && $_POST["selectedLang"] == "es") {
            echo "selected";
        }
        //formulariotik ez bada hizkuntzarik aukeratu eta sesioan gaztelera badago
        else if (!isset($_POST["selectedLang"]) && isset($_SESSION["_LANGUAGE"]) && $_SESSION["_LANGUAGE"] == "es") {
            echo "selected";
        }
        ?>> ES</option>
    </select>
    <button class="langBtn"><?= trans("aldatu") ?></button>
</form>    
</body>
</html>
