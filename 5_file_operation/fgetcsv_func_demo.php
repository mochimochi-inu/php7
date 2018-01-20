<?php

$fh = fopen('dishes.csv', 'rb');

while( (!feof($fh)) && $info = fgetcsv($fh)) {
    var_dump($info);
}

fclose($fh);
?>
