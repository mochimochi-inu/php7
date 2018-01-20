<?php

    $vegetables = array('corn' => 'yellow',
                        'beet' => 'red',
                        'carot' => 'orange');

    $dinner = [0 => 'Sweet Corn and Asparagus',
               1 => 'Lemon Chicken',
               2 => 'Braised Bamboo Fungus'];

    $computers = [
        'trs-80' => 'Raido Shack',
        2600 => 'Atari',
        'Adam' => 'Coleco'
    ];

    foreach($dinner as $key => $val) {
        print "$key : $val\n";
    }

?>
