<?php

    $zipcode = trim($_POST['zipcode']) ?? "2060025";

    $zip_length = strlen($zipcode);
    if($zip_length != 5) {
        print "Please enter a ZIP code that is 5 characters long.";
    }

?>
