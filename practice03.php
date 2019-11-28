<?php

    /*課題1*/
    define('_MYNAME','若月純平');
    $name = '若月純平';
    if(strcmp($name,_MYNAME)==0){
        echo "私は "._MYNAME." です";
    }else{
        echo _MYNAME." ではありません";
    };
    echo "\n";
    
    /*課題2*/
    $sum=0;
    for($i=1;$i<=10000;$i++){
        $sum += $i;
    }
    echo $sum."\n";
    
    /*課題3*/
    $fruits =array('みかん', 'りんご', 'ぶどう', 'なし', 'バナナ');
    foreach($fruits as $fruit){
        echo $fruit."\n";
    }
?>