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
    $a = 0;
    $b = 0;
    for( $i=1; $i<=($array1[0][0]); $i++ ){
        if($array1[$i][0] == 'SET' ){
            if($array1[$i][1] == 1){
                $a = $array1[$i][2];
            }elseif($array1[$i][1] == 2){
                $b = $array1[$i][2];
            }
        }elseif($array1[$i][0] == 'ADD'){
            $b = $a + $array1[$i][1];
        }elseif($array1[$i][0] == 'SUB'){
            $b = $a - $array1[$i][1];
        }
    }
    echo $a." ".$b;
?>
