<?php

    // strcmp() 辞書順の比較
    // $x = strcmp("x54321", "x5678");
    // $x = strcmp("54321", "5678");
    // $x = strcmp("6 pack", "55 card stud");
    // $x = strcmp("6 pack", 55);
    // print $x;

    // 宇宙船演算子 <=>
    // $x = 1 <=> 1.27;
    // $x = "charlie" <=> "bob";
    // $x = '6 pack' <=> '55 card stud';
    // $x = '6 pack' <=> 55;
    // print $x."\n";

    // strcacecmp() 小文字大文字を無視した比較
    $first_name = "aaa";
    $last_name = "bbb";

    if(strcasecmp($first_name, $last_name) === 0) {
        print "both are equal";
    } else {
        print "both are not equal";
    }

?>
