<?php

$page = file_get_contents('page_template.html');

$page = str_replace('{page_title}', 'Welcome', $page);

if (date('H') > 12) {
    $page = str_replace('{color}', 'blue', $page);
} else {
    $page = str_replace('{color}', 'green', $page);
}

$page = str_replace('{name}', 'nuki', $page);

print $page;

$result = file_put_contents('page.html', $page);

if(($result === false) || ($result == -1)) {
    print 'Couldn\'t save HTML to page.html';
}

?>
