<?php

    // $dimsum = [
    //     'Chicken Bun',
    //     'Stuffed Duck Web',
    //     'Turinp Cake'
    // ];
    //
    // print '<tr><td>'.implode('</td><td>', $dimsum).'</td></tr>';

    $dinner = [
        'Sweet Corn',
        'Lemon Chicken',
        'Braised Bamnoo'
    ];

    $meal = [
        'breakfast' => 'Walnut Bun',
        'lunch' => 'Cashew Nuts and White Mushrooms',
        'snach' => 'Dried Mulberries',
        'dinner' => 'Eggplant with Chili Sauce',
    ];

    print "Before Sorting:\n";
    foreach ($dinner as $key => $value) {
        print " \$dinner: $key $value\n";
    }
    foreach ($meal as $key => $value) {
        print " \$meal: $key $value\n";
    }

    sort($dinner);
    ksort($meal);

    print "After Sorting:\n";
    foreach ($dinner as $key => $value) {
        print " \$dinner: $key $value\n";
    }
    foreach ($meal as $key => $value) {
        print " \$meal: $key $value\n";
    }
?>
