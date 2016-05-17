<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    while($input = fgets(STDIN)){
        $array[] = trim($input);
    }
    foreach($array as $key => $value){
        $array1[] = explode (" ",$value);
    }
    define('shiro', '0');
    define('kuro', '1');
    for( $i=1; $i<($array1[0][0])+1; $i++ ){
        for( $j=0; $j<($array1[0][1]) ; $j++ ){

            if($j == ($array1[0][1]-1)){
                if( isset($array1[$i][$j]) && ($array1[$i][$j] <128)){
                    echo shiro."\n";
                }else{
                    echo kuro."\n";
                }
            }else{
                if( isset($array1[$i][$j]) && ($array1[$i][$j] <128)){
                    echo shiro." ";
                }else{
                    echo kuro." ";
                }
            }

            //echo ($array1[2][0]);
        }
    }

?>
