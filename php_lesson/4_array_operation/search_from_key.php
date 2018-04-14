<?php

    $meals = [
        "Walnut Bun" => 1,
        "Cashew Nuts and White Mushrooms" => 4.95,
        "Dried Mulberries" => 3.00,
        "Eggplant with Chili Sauce" => 6.50,
        "Shrimp Puffs" => 0,
        "AAA" => 123
    ];
    $books = [
        "The Eater's Guide to Chinese Characters",
        "How to Cook and Eat in Chinese"
    ];

    if(array_key_exists('Shrimp Puffs', $meals)) {
        print "Yes\n";
    }

    if(array_key_exists('Steak Sandwich', $meals)) {
        print "We have a Steak Sandwich\n";
    }

    if (array_key_exists(1, $books)) {
        print "Element 1 is $books[1]\n";
    }

    print "\n";

    $dish = array_search(6.50, $meals);
    if ($dish) {
        print "$dish costs \$6.50\n";
    }


    print "$meals[AAA]\n";

    unset($meals['AAA']);

    var_dump($meals);
?>
