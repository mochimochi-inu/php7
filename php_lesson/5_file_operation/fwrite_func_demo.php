<?php

$rfh = fopen('people.txt', 'rb');
$wfh = fopen('people2.txt', 'wb');

while( (!feof($rfh)) && $line = fgets($rfh) ) {
    $line = trim($line) . "\n";
    fwrite($wfh, $line);
}
fclose($rfh);
fclose($wfh);

 ?>
