<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    for($i=1;$i<10;$i++){
       if($i == 9)  echo ($i*$input_lines);
       else echo ($i*$input_lines)." ";
    }
?>
