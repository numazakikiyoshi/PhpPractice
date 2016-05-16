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

    $i = 0;
    $count[$i] = 0;
    while( $i<($array1[1][0])+2 ){
        $i++;
        if(($array1[0][0]==$array1[$i][0])||($array1[0][1]==$array1[$i][0])||($array1[0][2]==$array1[$i][0])||($array1[0][3]==$array1[$i][0])||($array1[0][4]==$array1[$i][0])||($array1[0][5]==$array1[$i][0])){
            $count[$i]++;
        }
        //echo ($count[$i]." ");
    }
        //echo ($count[$i]." ");
?>
