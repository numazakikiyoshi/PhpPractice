<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines1 = fgets(STDIN);
    $input_lines2 = fgets(STDIN);
    $input_lines3 = fgets(STDIN);

    if($input_lines1 ==$input_lines2){
        if($input_lines1 ==$input_lines3){
            echo"YES";
        }else{
            echo"NO";
        }
    }else{
        echo"NO";
    }
?>
