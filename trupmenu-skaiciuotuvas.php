<!-- Sukurkite skaičiuotuvą, sudedantį dvi trupmenas. Rezultatas atvaizduojamas su sveikąja ir trupmenine dalimi į div.
Kiekvienas laukelis turi turėti patikrinimą, ar jame yra įvestas skaičius. -->
<?php

// include 'gcd.php';
$sveik1 = $_GET["sveikadalis1"];
$skait1 = $_GET["skaitiklis1"];
$vard1 = $_GET["vardiklis1"];
$sveik2 = $_GET["sveikadalis2"];
$skait2 = $_GET["skaitiklis2"];
$vard2 = $_GET["vardiklis2"];
// $veiksmas = $_GET["zenklas"];
$rezultatas = 0;

if(isset($sveik1)&& !empty($sveik1) && isset($skait1)&& !empty($skait1) && isset($vard1)&& !empty($vard1)  && isset($sveik2)&& !empty($sveik2) && isset($skait2)&& !empty($skait2) && isset($vard2)&& !empty($vard2) ){

if(is_numeric($sveik1) && is_numeric($skait1) && is_numeric($vard1) && is_numeric($sveik2) && is_numeric($skait2) && is_numeric($vard2)) {

$skaitNew1=$sveik1*$vard1+$skait1;
$skaitNew2=$sveik2*$vard2+$skait2;

if($vard1!=$vard2 && $vard2!=0 && $vard1!=0 ) {
$skaitNew1 *= $vard2;
$skaitNew2 *= $vard1;
$vard1 *= $vard2;
$bendrasSkait = $skaitNew1 + $skaitNew2;
$sveikNew = intval($bendrasSkait / $vard1);
$liekana = $bendrasSkait % $vard1;

// $daliklis = gmp_gcd($liekana, $vard1);
// echo "<div class='gmp'> $daliklis </div>";


} else if ($vard1==$vard2 && $vard2!=0 && $vard1!=0) {
    $bendrasSkait = $skaitNew1 + $skaitNew2;
    $sveikNew = intval($bendrasSkait / $vard1);
$liekana = $bendrasSkait % $vard1;

}
if($liekana==0) {
    $rezultatas= $sveikNew;
} else {
    $rezultatas= "$sveikNew  $liekana/$vard1";

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
$gcd = gmp_gcd( '$liekana', '$vard1' );
    echo "<div class='rezultatas'> gmp_strval( $gcd )</div>";
?>