<!-- 1.Parduotuvėje pardavėja graža g pirkejui nori atiduoti 100,50,20,10,5 euru banknotais ir 2 ir 1 eurais monetomis.
Apskaičiuoti, kiek ir kokio nominalo banknotų ir monetų pardavėja turės atiduoti pirkėjui. -->
<?php

$suma = $_GET["graza"];

if(isset($suma)&& !empty($suma) ){
    if (is_numeric($suma)){
echo "Iš grąžos ".$suma." € pardavėja atiduos: <br><br>";
$simtas=intval($suma/100);
$graza=$suma%100;

if ($simtas!=0){
    echo $simtas." po 100 €<br>";
}

$pem=intval($graza/50);
$graza%=50;

if ($pem!=0){
    echo $pem." po 50 €<br>";
}

$dvim=intval($graza/20);
$graza%=20;
if ($dvim!=0){
    echo $dvim." po 20 €<br>";
}

$desimt=intval($graza/10);
$graza%=10;

if ($desimt!=0){
    echo $desimt." po 10 €<br>";
}

$penki=intval($graza/5);
$graza%=5;

if ($penki!=0){
    echo $penki." po 5 €<br>";
}
$du=intval($graza/2);
$graza%=2;

if ($du!=0){
    echo $du." po 2 €<br>";
}

$vienas=intval($graza/1);
$graza%=1;
if ($vienas!=0){
    echo $vienas." po 1 €";
}

}
 else {
    echo "Neteisingai įvedėte sumą.";
}
} else
{
    echo "Patikrinkite įvestą sumą.";
}










?>