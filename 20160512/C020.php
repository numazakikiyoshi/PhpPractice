<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = explode (" ",$input_lines);

    $b = ($a[0]*(1-0.01*$a[1]));
    $c = ($b*(1-0.01*$a[2]));
    echo "$c";
?>
