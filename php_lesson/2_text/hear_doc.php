<?php
$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';

print <<< _HTML
    <html>
    <head>
        <title>$page_title</title>
    </head>
    <body bgcolor="#fffed9">
        <h1>Dinner</h1>
        <ul>
            <li>Barbecued $meat</li>
            <li>Sliced d$meat</li>
            <li>Braised $meat with $vegetable</li>
        </ul>
    </body>
    </html>
_HTML;

?>
