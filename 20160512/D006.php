<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);
    $i = explode (" ",$input_lines1);
    $i[1] = substr($i[1], 0, -1);
    if($i[1]=='km'){
        $i[0] = $i[0] * 1000000;
    }elseif($i[1]=='m'){
        $i[0] = $i[0] * 1000;
    }elseif($i[1]=='cm'){
        $i[0] = $i[0] * 10;
    }
    echo ($i[0]);
?>
