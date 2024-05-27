<?php
    $arr =array(1,2,3,4,5);
    var_dump($arr);
    foreach($arr as $key => $value){
        echo "$key => $value";
    };

    $arr = array(
        array(1,2,3),
        array('a','b'),
        array(1,2,3,4,5,6),
    );

    foreach($arr as $value){
        foreach($value as $elem){
            echo" $elem , ";
        }
        echo '<br>';
    }




    

    ///операции





?>