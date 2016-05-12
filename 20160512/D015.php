<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);
    $num1 = substr($input_lines1, 0, -1);
    for($i=$num1;$i>0;$i--){
        echo "$i\n";
    }
?>
