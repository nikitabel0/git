
    <?php
  $numder = array(1,2,3);
  $bukvi = array( 'a', 'b', 'c');
  $splitArray = array_merge($numder, $bukvi);
  print_r($splitArray)




  $numeber1 = $_GET['number1'];
  $numeber2 = $_GET['number2'];
  echo $numeber1 + $numeber2

  $lox = array(2,3,4,57,2,3,4,5,3,1,5,2,4,52,4,5,2,4,53,2,1);
  

  if (in_array(3, $lox)) {
      echo "В массиве лох есть элемент со значением 3.";
  } else {
      echo "В массиве лох нет элемента со значением 3.";
  }


  $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

  foreach($arr as $key => $value){
    echo "$key => $value";
};

function square($number) {
    return $number * $number;
}

$result = square(5); 
echo $result; 


    ?>
    
