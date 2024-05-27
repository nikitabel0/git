
<?php
    $str = 'ivanov ivan ivanovich';
    $pattern = '/ ([A-Z][a-z])+ ([A-Z])[a-z]+ ([A-Z])[a-z]+/';
    preg_match($pattern,$str,$mathes);
    var_dump($mathes);
    echo '<br>';
    echo $mathes[1].'.'.$$mathes[2].'.'.$mathes[3];




    $strr ='adAdadad';
    echo str_replace('a','!',$strr).'<br>';
    echo preg_replace('/a{2}/i','1',$str);'<br>';
     