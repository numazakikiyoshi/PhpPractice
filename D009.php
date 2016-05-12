<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);

    $a = explode (" ",$input_lines1);
    $b=$a[0]-$a[1];
    if($b<0){
        $b=$b*(-1);
    }
    echo($b);
?>
