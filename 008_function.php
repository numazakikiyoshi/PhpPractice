<?php
// 関数の宣言
function circle($r) {
  return $r * $r * M_PI;
}

// 変数
$r = 3;

// 関数の呼び出し
$area = circle($r);
echo "半径". $r."の円の面積は<br />";
echo $area ."<br />";
?>
