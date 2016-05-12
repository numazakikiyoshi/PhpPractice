<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $input_lines2 = fgets(STDIN);
    $input_lines3 = fgets(STDIN);
    $input_lines4 = fgets(STDIN);
    $input_lines5 = fgets(STDIN);
    $input_lines6 = fgets(STDIN);
    $input_lines7 = fgets(STDIN);
    if ($input_lines <= 30) $count++;
    if ($input_lines2 <= 30) $count++;
    if ($input_lines3 <= 30) $count++;
    if ($input_lines4 <= 30) $count++;
    if ($input_lines5 <= 30) $count++;
    if ($input_lines6 <= 30) $count++;
    if ($input_lines7 <= 30) $count++;
    print_r($count);
?>
