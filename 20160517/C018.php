<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    while($input = fgets(STDIN)){
        $array[] = trim($input);
    }
    foreach($array as $key => $value){
        $array1[] = explode (" ",$value);
    }
    //print_r($array1);
    $servings = 1000;
    for( $i=1; $i<($array1[0][0]+1); $i++ ){
        for( $j=($array1[0][0]+2); $j<101; $j++ ){
            if( isset($array1[$j][0]) && ($array1[$i][0] === $array1[$j][0]) ){
                //echo 'test';
                $num = ceil($array1[$j][1]/$array1[$i][1]);
                if( $servings >= $num ){
                    $servings = $num;
                }
            }
        }
        if($servings == 1000){
            $servings = 0;
        }
    }
    echo $servings."\n";
?>
