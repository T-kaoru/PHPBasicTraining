<?php

$a[0][0] = 'AA';
$a[0][1] = 'AB';
$a[1][0] = 'BA';
$a[1][1] = 'BB';
$a[1][2] = 'BC';

var_dump($a);
echo "<br>";

foreach ($a as $key1 => $value1) {
    foreach ($a[$key1] as $key2 => $value2) {
        if ( $value2 === 'BA'){
            echo "<br>" . $value2;
        }
    }
}

?>
