<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = explode (" ",$input_lines);
    echo $a[0];
    for($i=0;$i<9;$i++){
        $a[0] += $a[1];
        echo " ".$a[0];
    }
?>
