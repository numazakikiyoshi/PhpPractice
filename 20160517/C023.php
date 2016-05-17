<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    while($input = fgets(STDIN)){
        $array[] = trim($input);
    }
    foreach($array as $key => $value){
        $array1[] = explode (" ",$value);
    }

    for( $i=2; $i<($array1[1][0])+2; $i++ ){
        $count= 0;
        for( $j=0; $j<6 ; $j++ ){
            if( (isset($array1[$i][$j])) && (($array1[$i][$j] == $array1[0][0]) || ($array1[$i][$j] == $array1[0][1]) || ($array1[$i][$j] == $array1[0][2]) || ($array1[$i][$j] == $array1[0][3]) || ($array1[$i][$j] == $array1[0][4])|| ($array1[$i][$j] == $array1[0][5]))){
                $count++;
            }
        }
        echo ($count."\n");
    }
?>
