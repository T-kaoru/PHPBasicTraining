<?php
$x = 6; // 数値
$y = "6"; // 文字列
$br = "<br />";

var_dump($x);
echo $br;
var_dump($y);
echo $br . $br;

// 条件分岐①
if( $x==$y ){
  echo "TRUE" . $br;
} else {
  echo "FALSE" . $br;
}
// 条件分岐②
if( $x===$y ){
  echo "TRUE" . $br;
} else {
  echo "FALSE" . $br;
}
?>
