<?php

function greet() {
    
    $message = "Hello";
    $message .= " World!";
    $message .= " The date today is ";

    return $message;
}

echo greet();
echo date("\nF j\, Y");

?>
