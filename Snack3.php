<?php 
$numeriCasuali = [];

$iterazioni=15;
$min = 0;
$max = 50;

for($i=0;$i<$iterazioni;$i++){
    $numeroCasuale =rand($min,$max);
    if(!in_array($numeroCasuale, $numeriCasuali)){
        $numeriCasuali[] = $numeroCasuale;
    }
}



    
    var_dump($numeriCasuali)

?>