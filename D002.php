<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);

    $input_lines2 = explode (" ",$input_lines1);

    if($input_lines2[0] == $input_lines2[1]){
        echo 'eq';
    }elseif($input_lines2[0] >= $input_lines2[1]){
        echo $input_lines2[0];
    }else{
        echo $input_lines2[1];
    }
?>
