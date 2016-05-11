<?php

// 関数の宣言
function circle($r) {
  $a = $r * $r * M_PI;
  return $a;
}

// 変数
$r = 3;

// 関数の呼び出し
$area = circle($r);
echo $area ."\n";

?>
