<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);

    $input_lines2 = explode (" ",$input_lines1);
    $input_lines3 = substr($input_lines2[0], 0, 1);
    $input_lines4 = substr($input_lines2[1], 0, 1);

    echo($input_lines3.".".$input_lines4)
?>
