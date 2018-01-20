<?php

    // 1
    // print 'How are you?';
    // print 'I\'m fine.';

    // 2
    // $tax_rate = 0.075;
    // $tip_rate = 0.16;
    //
    // $humburger = 4.95;
    // $cm_shake = 1.95;
    // $cola = 0.85;
    //
    // $food = ($humburger * 2) + $cm_shake + $cola;
    // $tax = $food * $tax_rate;
    // $tip = $food * $tip_rate;
    // $amount = $food + $tax + $tip;
    //
    // print $amount;

    // 3
    // printf("Humburger ($%.2f) * 2 = $%.2f\n", $humburger, $humburger * 2);
    // printf("Shake ($%1$.2f) = $%1$.2f\n", $cm_shake);
    // printf("Cola ($%1$.2f) = $%1$.2f\n", $cola);
    // printf("Food price is %.2f, with tax is %.2f, total amount is %.2f", $food, $food + $tax, $amount)

    // 4
    // $first_name = "Hoge";
    // $last_name = "Fuga";
    //
    // print("$first_name $last_name");
    // print(strlen($first_name.$last_name));

    // 5
    for($i = 1; $i <= 5; $i++) {
        print $i."\n";
    }

    $p = 2;
    for($i = 1; $i <= 5; $i++) {
        print $p."\n";
        $p *= 2;
    }
?>
