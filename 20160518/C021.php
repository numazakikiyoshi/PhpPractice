<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    while($input = fgets(STDIN)){
        $array[] = trim($input);
    }
    foreach($array as $key => $value){
        $array1[] = explode (" ",$value);
    }
    for( $i=2; $i<$array1[1][0]+2; $i++ ){
        $a = pow($array1[0][2],2);
        $b = pow(($array1[$i][0]-$array1[0][0]),2) + pow(($array1[$i][1]-$array1[0][1]),2);
        $c = pow($array1[0][3],2);
        if( $a <= $b && $b <= $c){
            echo "yes\n";
        }else{
            echo "no\n";
        }
    }
?>
