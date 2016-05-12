<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);
    $input_lines2 = explode (" ",$input_lines1);
    $input_lines2[1] = $input_lines2[1] - 1;
    echo substr($input_lines2[0], $input_lines2[1], 1);
?>
