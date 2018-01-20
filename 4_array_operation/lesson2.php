<?php

    $population = [
        "New York ,NY" => 8175133,
        "Los Angeles, CA" => 3792621,
        "Chicago, CA" => 2695598,
        "Houston, TX" => 2100263,
        "Philadelphia, PA" => 1526006,
        "Phoenix, AZ" => 1445632,
        "San Antonio, TX" => 1327407,
        "San Diego, CA" => 1307402,
        "Dallas, TX" => 1197816,
        "San Jose, CA" => 945942
    ];

    $total = 0;
    foreach ($population as $key => $val) {
        $total += $val;
    }
    //
    // print "<tr>\n<td>".implode("</td>\n<td>", $population)."</td>\n</tr>\n";
    // print "総人口：$total\n";
    //
    // print "After sorting\n";
    //
    // rsort($population);
    //
    // print "<tr>\n<td>".implode("</td>\n<td>", $population)."</td>\n</tr>\n";


    $each_pop = [];
    foreach($population as $key => $val ){
        $city_info = explode(",", $key);


        if( !array_key_exists($city_info[1], $each_pop) ) {
            $each_pup[$city_info[1]] = 0;
        }
        $each_pup[$city_info[1]] += $val;

    };
    print "総人口：$total\n";

    foreach ($each_pup as $key => $value) {
        print "$key : $value\n";
    }
?>
