<?php

function hoge( $b, $a = "Hello"){
  $a .= ", World<br>";
  return $a;
}


echo hoge("fuck");
echo hoge("fuck", "fuck");

?>
