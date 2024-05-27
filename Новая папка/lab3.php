<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a =  '220 + X = 1220';
    echo $a.'<br/>';
    $equation =  explode(' ', $a);
    switch ($equation[1]) {
        case  '+':
            echo 'X = '.($equation[4] - $equation[0]);
            break;
        case  '/':
            echo 'X = '.($equation[0] * $equation[4]);
            break;
        case  '-':
            echo 'X = '.($equation[0] + $equation[4]);
            break;
        case  '*':
            echo 'X = '.($equation[4] / $equation[0]);
            break;
    };
    ?>
    
</body>
</html>