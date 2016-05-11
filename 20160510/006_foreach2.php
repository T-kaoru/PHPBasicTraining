<?php

$a = ['A'=>1, 3=>2, 'Z'=>'Hello', 1=>794, 'kama'=>1192];

var_dump($a);
echo "<br /><br />";

foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br />";
}

?>
