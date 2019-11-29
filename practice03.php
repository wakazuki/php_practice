<?php

    /*課題1*/
    define('_MYNAME', '若月純平');
    $name = '若月純平';
    if( strcmp($name, _MYNAME) == 0){
        echo "私は " . _MYNAME . " です";
    }else{
        echo _MYNAME . " ではありません";
    };
    echo "\n";
    
    /*課題2*/
    $sum=0;
    for($i=1; $i<=10000; $i++){
        $sum += $i;
    }
    echo $sum."\n";
    
    /*課題3*/
    $fruits =array('みかん', 'りんご', 'ぶどう', 'なし', 'バナナ');
    foreach($fruits as $fruit){
        echo $fruit."\n";
    }
    
    /*課題4*/
    /* for文の始めの値を定義する */ //アスタリスクがない
    $start = 1;
    /* for文の終わりの値を定義する */
    $end = 100;

    for($i = $start; $i <= $end; $i++){ //99までしか繰り返しがない
        // 5で割り切れたら{}内を実行する
        if($i % 5 == 0){
            echo $i . "\n"; //セミコロンがない
        }
    }
?>