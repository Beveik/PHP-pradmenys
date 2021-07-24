<?php


$pirmas = $_GET["skaicius1"];
$antras = $_GET["skaicius2"];
$veiksmas = $_GET["zenklas"];
$rezultatas = 0;

// if(isset($_GET["skaicius1"])&& !empty($_GET["skaicius1"]) && isset($_GET["skaicius2"])&& !empty($_GET["skaicius2"]) && isset($_GET["zenklas"])&& !empty($_GET["zenklas"]) )
if(isset($pirmas)&& !empty($pirmas) && isset($antras)&& !empty($antras) && isset($veiksmas)&& !empty($veiksmas) ){

    // Sukurti skaičiuotuvą. Skaičiuotuve įvedami du skaičiai į du skirtingus input.
    // Aritmetinis veiksmas perduodamas per GET. Pvz.: sukuriamas trečias input, jei tame input yra + ženklas,
    // jis perduodamas per GET, ir PHP kode if tikrina, koks aritmetinis veiksmas buvo perduotas.
    // Rezultatas išvedamas į div.
    


if(is_float($pirmas) && is_float($antras)) {

if($veiksmas == "+"){
    $rezultatas=$pirmas+$antras;

} else if ($veiksmas == "-"){
    $rezultatas=$pirmas-$antras;
} else if ($veiksmas == "*") {
    $rezultatas=$pirmas*$antras;
} else if ($veiksmas == "/"){
    $rezultatas=$pirmas/$antras;
} else {
    $rezultatas= "Patikrinkite kintamuosius.";
}
}
else {
    $rezultatas= "Kintamasis - ne skaičius.";
}
}
else { 

    $rezultatas= "Kintamieji tušti arba neegzistuoja.";

}
echo "<div class='rezultatas'> $rezultatas </div>";

?>