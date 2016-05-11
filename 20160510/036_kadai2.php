<?php

$array = array( "one", "sec", "thr", "for" , "fiv" );

foreach ($array as $a) {
    echo $a . "<br>";
}

$array[5] = ( "研修" );
echo "<br>";

foreach ($array as $key => $b) {
    echo $key . " " . $b . "<br>";
}


?>
