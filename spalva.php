<!-- 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva. -->
<!-- 6. Papildikite 5 programą, kad perduodant per input laukelį ne tik tekstą, bet ir spalvos kodą, puslapis nusidažytu spalvos kodo spalva. -->


<?php
$color = $_POST["spalva"];
if(isset($color)&& !empty($color) ){

// if($color=="raudona" || $color=="#ff0000"){
//     $rezultatas = '<body style="background-color:red">';
// } else if ($color=="juoda" || $color=="#0f0f0f"){
//     $rezultatas = '<body style="background-color:black">';
//     }else if ($color=="melyna" || $color=="#0000ff"){
//         $rezultatas = '<body style="background-color:blue">';
        
//         }
//          else  {
//             $rezultatas = '<body style="background-color:$color">';
//             // $rezultatas= 'Tokios spalvos nėra.';


//             }
$rezultatas=$color;

        }

else { 

    echo 'Tokios spalvos nėra.';

}
// echo $rezultatas;
?>

<style>
body {
    background-color: <?php echo $rezultatas ?>;
}
    </style>