<?php
function hoge($a) {
  return ++$a;
}
$b = 1;

echo hoge($b) ."<br>";
echo $b ."<br>";
for ( i=0; i<5; i++ ){
    echo hoge($b) ."<br>";
}
?>
