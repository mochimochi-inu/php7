<?php

    $price1 = 10.0;
    $price2 = 10.0;

    if(abs($price1 - $price2) < 0.000001) {
        print '$price1 and $price2 are equal.';
    } else {
        print '$price1 and $price2 are not equal.';
    }

 ?>
