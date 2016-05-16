<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    while($input = fgets(STDIN)){
        $array[] = trim($input);
    }
    foreach($array as $key => $value){
        $array1[] = explode (" ",$value);
    }
    //終値
    $i =0;
    while($i < $array1[0][0]){
        $i++;
        if($i == $array1[0][0]){
            $end = $array1[$i][1];
        }
    }
    //高値
    $i =0;
    $max = 0;
    while($i < $array1[0][0]){
        $i++;
        if($max < $array1[$i][2]){
            $max = $array1[$i][2];
        }
    }
    //安値
    $i =0;
    $min = 1000000;
    while($i < $array1[0][0]){
        $i++;
        if($min > $array1[$i][3]){
            $min = $array1[$i][3];
        }
    }

    print_r($array1[1][0]." ");
    print_r($end." ");
    print_r($max." ");
    print_r($min);


?>
