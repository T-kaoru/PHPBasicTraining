<?php

$a = array(
    0 => array(
        0 => 'AA',
        1 => 'AB',
    ),
    1 => array(
        0 => 'BA',
        1 => 'BB',
        2 => 'BC',
    ),
);

$a = $a + array(
    2 => array(
        0 => 'CA',
    ),
);

var_dump($a);
echo "<br>";

foreach ($a as $key1 => $value1) {
    foreach ($a[$key1] as $key2 => $value2) {
        echo "<br>" . $key1 . $key2. " " . $value2;
    }
}

?>
