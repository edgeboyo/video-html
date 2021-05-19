<?php

function stripExtension($fname) {
    $parts = explode(".", $fname);

    $finished = "";

    array_pop($parts);

    foreach($parts as $part) {
        $finished = $finished . "." . $part;
    }

    return substr($finished, 1);
}

?>