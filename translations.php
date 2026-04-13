<?php

session_start();

if (isset($_SESSION["erab"])) {
    $erabiltzailea = $_SESSION["erab"];
    $xml = simplexml_load_file("hizkuntzak.xml");

    $aurkitutakoHizkuntza = null;

    foreach ($xml->bezeroa as $bezeroa) {
        if ((string)$bezeroa['erabiltzailea'] === $erabiltzailea){
            $aurkitutakoHizkuntza = (string)$bezeroa->hizkuntza;
            break;
        }
    }

    if ($aurkitutakoHizkuntza !== null) {
        $_SESSION["_LANGUAGE"] = $aurkitutakoHizkuntza;
    } else if (!isset($_SESSION["_LANGUAGE"])) {
        setSessionLanguageToDefault();
    }

} else if (!isset($_SESSION["_LANGUAGE"])) {

    setSessionLanguageToDefault();
}

changeSessionLanguage();

?>
<?php

/** FUNTZIOAK */
function setSessionLanguageToDefault()
{
  $_SESSION["_LANGUAGE"] = "eus"; //Defektuz "eus" hizkuntza jartzen dugu (hemen "en" jarri ezkero, language karpetan en.php izeneko fitxategi bat egon beharko litzateke)
}

function changeSessionLanguage()
{
  /** post batean informazioa datorrenean bakarrik aldatuko da */
  if (isset($_POST["selectedLang"])) {
    $_SESSION["_LANGUAGE"] = $_POST["selectedLang"]; //post-ean datorren hizkuntza jarriko du sesioko aldagaiean
  }

}
function trans($indexPhrase)
{
  //Itzulpen array-a sortzen da
  static $tranlationsArray = array();

  //eus.php edo es.php existitzen den begiratzen da
  if (file_exists($_SESSION["_LANGUAGE"] . '.php')) {
    //Existitzen bada fitxategi horretan dagoen array-a $translationArray barruan sartzen da
    $tranlationsArray = include($_SESSION["_LANGUAGE"] . '.php');

  }
  //Array-eko indizearen balioa itzultzen du.
  
  if(!array_key_exists($indexPhrase, $tranlationsArray)){
    return $indexPhrase ;
  }else{
    return $tranlationsArray[$indexPhrase];
  }
}

?>