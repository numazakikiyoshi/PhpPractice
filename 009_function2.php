<?php
function hoge( $a = "Hello"){
  $a .= ", World<br />";
  return $a;
}

echo hoge();

?>
