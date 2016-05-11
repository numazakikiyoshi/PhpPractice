<?php
function piyo(&$a) {
  return ++$a;
}
$b = 1;

echo piyo($b) ."<br />";
echo $b ."<br />";
?>
