<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);
    $input_lines2 = fgets(STDIN);
    $input_lines3 = fgets(STDIN);
    $input_lines4 = fgets(STDIN);
    $input_lines5 = fgets(STDIN);
    $input_lines6 = fgets(STDIN);
    $input_lines7 = fgets(STDIN);

    $num1 = substr($input_lines1, 0, -1);
    $num2 = substr($input_lines2, 0, -1);
    $num3 = substr($input_lines3, 0, -1);
    $num4 = substr($input_lines4, 0, -1);
    $num5 = substr($input_lines5, 0, -1);
    $num6 = substr($input_lines6, 0, -1);
    $num7 = substr($input_lines7, 0, -1);

    if($num1=="no") $count++;
    if($num2=="no") $count++;
    if($num3=="no") $count++;
    if($num4=="no") $count++;
    if($num5=="no") $count++;
    if($num6=="no") $count++;
    if($num7=="no") $count++;

    echo "$count";
?>
