<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $num1 = substr($input_lines, 0, -1);
    $a = 1 + (strpos("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $num1));
    echo $a;
?>
