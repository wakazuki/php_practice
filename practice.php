<?php
    echo "hello php!\n";
    
    /*課題1*/
    $a=3;
    $b=7;
    echo $a+$b."\n";
    
    /*課題2*/
    $array_month=[
        "January" => "1月",
        "February" => "2月",
        "March" => "3月",
        "April" => "4月",
        "May" => "5月",
        "June" => "6月",
        "July" => "7月",
        "August" => "8月",
        "September" => "9月",
        "October" => "10月",
        "November" => "11月",
        "December" => "12月",
        ];
    echo $array_month["August"]."\n";
    
    /*課題3*/
    $hello = "hello, ";
    $name = "若月純平";
    $world = "'s World";
    echo $hello.$name.$world."\n";
    
    /*課題4*/
    $tech_boost = "tech";
    $tech_boost .= " boost";
    echo $tech_boost."\n";
    
    /*課題5*/
    
    //変数名が数字から始まる。
    //配列が[]で囲まれていない。
    //全角スペースが所々入っている
    $calendar_2018 = [ 
        "January" => "1月", 
        "February" => "2月", //コンマが全角
        "March" => "3月",
        "April" => "4月",
        "May" => "5月",
        "June" => "6月", //連想配列で=>になっていない
        "July" => "7月",
        "August" => "8月",
        "September" => "9月",
        "October" => "10月", //10月がダブルクォーテーションで囲まれていない
        "November" => "11月", 
        "December" => "12月",
        ];

        // 12月を表示する
        //Decemberがダブルクォーテーションで囲まれていない
        echo $calendar_2018["December"]."\n";
?>