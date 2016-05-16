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

    $i =0;
    while($i < $array1[0][0]){
        $i++;
        if(((2*$array1[0][1])<=$array1[$i][0]) && ((2*$array1[0][1])<=$array1[$i][1]) && ((2*$array1[0][1])<=$array1[$i][2]) ){
            print_r($i."\n");
        }
    }

?>
