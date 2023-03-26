<?php

$value = readline("[Enter a word]:");

function compute($value) {
    return strlen($value) * 2;
    }

echo compute($value);
?>
