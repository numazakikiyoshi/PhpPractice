<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);
    $input_lines2 = fgets(STDIN);
    $input_lines3 = fgets(STDIN);
    $input_lines4 = fgets(STDIN);
    $input_lines5 = fgets(STDIN);
    $num1 = intval( $input_lines1 );
    $num2 = intval( $input_lines2 );
    $num3 = intval( $input_lines3 );
    $num4 = intval( $input_lines4 );
    $num5 = intval( $input_lines5 );
    $max = max($num1,$num2,$num3,$num4,$num5);
    $min = min($num1,$num2,$num3,$num4,$num5);
    echo ($max);
    echo "\n";
    echo ($min);
?>
