<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_lines = fgets(STDIN);
    $s = $input_lines * ($input_lines - 1) / 2;
    print_r($s);
?>
