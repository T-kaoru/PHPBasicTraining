<?php
$x = "b";
$y = "a";
$br = "<br>";

mb_convert_encoding($x);

var_dump($x);
echo $br;
var_dump($y);
echo $br . $br;

// 条件分岐①
if( $x>$y ){
  echo "TRUE" . $br;
} else {
  echo "FALSE" . $br;
}
// 条件分岐②
if( $x<$y ){
  echo "TRUE" . $br;
} else {
  echo "FALSE" . $br;
}
// 条件分岐③
if( $x>=$y ){
  echo "TRUE" . $br;
} else {
  echo "FALSE" . $br;
}
// 条件分岐④
if( $x<=$y ){
  echo "TRUE" . $br;
} else {
  echo "FALSE . $br";
}
?>
