<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    while($input = fgets(STDIN)){
        $array[] = trim($input);
    }
    foreach($array as $key => $value){
        $array1[] = explode (" ",$value);
    }
    print_r($array1);
    $count = 0;
    $count1 = 0;
    $paper = 0;
    for( $i=2; $i<=$array1[$i][0]; $i++ ){;
        for( $i=3; $array1[$i][0]==$i; $i++ ){
            $paper =+ $array1[$i][2];
            echo 'test1';
        }
        $count = ceil($paper/$array1[0][0]);
            $count1 =+ $count;
    }
    //echo $count1;
?>
