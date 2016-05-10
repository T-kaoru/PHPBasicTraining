<?php

$i=0;
$BrFlg=0;

while ( $i<10 ) {
    if ( 4<$i & $BrFlg===0 ) {
        echo "<br />";
        $BrFlg=1;
    }
  echo $i ."<br />";
  $i++;
}

?>
