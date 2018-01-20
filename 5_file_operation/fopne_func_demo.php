<?php

$fh = fopen('people.txt', 'rb');
while (!feof($fh)) {
    $line = fgets($fh);
    // 0や空文字を帰す場合があるので、かならず同値演算子を使って判断する
    if ($line !== false) {
        $line = trim($line);
        $info = explode('|', $line);

        print '<li><a href="mailto:' . $info[0] .'">' . $info[1] . '</a></li>' . "\n";
    }
}
fclose($fh);

?>
