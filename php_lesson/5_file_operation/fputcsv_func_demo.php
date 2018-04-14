<?php

$rfh = fopen('dishes.csv', 'rb');
$wfh = fopen('dishes_copy.csv', 'wb');

while( (!feof($rfh)) && $info = fgetcsv($rfh) ) {
    fputcsv($wfh, $info);
}

fclose($rfh);
fclose($wfh);

?>
