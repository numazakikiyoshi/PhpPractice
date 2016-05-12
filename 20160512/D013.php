<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);

    $i = explode (" ",$input_lines1);

    $a = $i[0]/$i[1];
    $a = floor($a);
    $b = $i[0]%$i[1];

    echo ($a)." ";
    echo ($b);
?>
