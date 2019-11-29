<?php

    /*課題1*/
    echo '課題1' . "\n";
    
    function fPro_2bai($pNum){
        return $pNum * 2;
    }
    
    echo fPro_2bai(10) . "\n";
    
    /*課題2*/
    echo '課題2' . "\n";
    
    function fSum($a, $b){
        return $a + $b;
    }
    
    echo  fSum(3,5) . "\n";
    
    /*課題3*/
    echo '課題3' . "\n";
    
    function fProduct($pArray){
        $pro = 1;
        foreach($pArray as $i){
            $pro *= $i;
        }
        return $pro;
    }
    
    $tSample_array = array(1, 3, 5, 7, 9);
    echo fProduct( $tSample_array ) . "\n";
    
    /*課題4*/
    echo '課題4' . "\n";
    
    function fmax_array($arr){
        // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
            //どうしたらいいかわからない・・・・OKです
            if($max_number < $a){
                $max_number = $a;
            }
        }
        return $max_number;
    }
    
    echo fmax_array( $tSample_array ) . "\n";
     
    /*課題5*/
    //strip_tags()
        //引数->文字列
        //戻り値->HTMLタグやPHPタグを取り除いた文字列を返す
    echo '課題5-strip_tags' . "\n";
    
    $sample_str = "<h1>タイトル</h1>\n";
    echo strip_tags($sample_str);
     
    //array_push()
        //第1引数の配列に、第2引数以降の変数の値を末項に加える。
        //引数-> 配列, 変数1, 変数2・・・
        //戻り値->加えた後の要素数。
    echo '課題5-array_push' . "\n";  
    
    $tNum = 13;
    echo array_push($tSample_array, 11, $tNum) . "\n"; //加えた後の要素数を表示
    
    foreach( $tSample_array as $i){
        echo $i . "\n";
    }
    
    //array_merge()
        //第1引数の配列に、第2引数移行の配列を連結する。※重複したキーがあった場合は後の値を上書きする
        //引数-> 配列1, 配列2, 配列3・・・
        //戻り値->連結後の配列
    echo '課題5-array_merge' . "\n";
    
    $tAdd_array = array(15, 17, 19);
    $tSample_array = array_merge($tSample_array, $tAdd_array);
    foreach( $tSample_array as $i){
        echo $i . "\n";
    }
    
    //time(), mktime()
        //time・・・現在のタイムスタンプを取得する　mktime・・・指定のタイムスタンプを取得する
    echo '課題5-time,mktime' . "\n";
    
    $tNow = time();
    $tDate = mktime(0, 0, 0, 12, 1, 2019);
    if($tNow < $tDate){
        echo '現在は'. date('Y年m月d日', $tDate). 'より前の日付です'. "\n";;
    }else{
        echo '現在は'. date('Y年m月d日', $tDate). 'より後の日付です'. "\n";;
    }
    
    //date()
        //指定したフォーマットで日付文字列を返す
    echo '課題5-date' . "\n";
    
    echo '今日の日付は' . date('Y年m月d日') . 'です' . "\n";
?>