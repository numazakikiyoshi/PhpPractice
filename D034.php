<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $s=21%$input_lines;
    if($s==0){
        print_r($input_lines);
    }else{
        print_r($s);
    }
?>
