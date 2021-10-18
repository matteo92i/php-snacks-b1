<?php
 
 $classeIovane = 
    [
        [
            'name' => 'Michele',
            'cognome' => 'Iovane',
            'voti' => [ 25, 30, 18, 29]
            
        ],
        [
            'name' => 'Matteo',
            'cognome' => 'Iovane',
            'voti' => [24,30,27,25]
        ],
        [
            'name' => 'Gianluca',
            'cognome' => 'Iovane',
            'voti' => [ 30, 19, 29, 29],
            
        ],
        [
            'name' => 'Eleonora',
            'cognome' => 'Iovane',
            'voti' => [30,30,27,28],
        ],
    ];



?>

    


 
<ul>
    <?php foreach($classeIovane as $element) { ?>
        <li> 
            <?php echo $element ['name']; ?> 
            <?php echo $element ['cognome']; ?>
            <?php echo array_sum($element['voti']) / 4; ?>
        </li>

    <?php } ?>
</ul>