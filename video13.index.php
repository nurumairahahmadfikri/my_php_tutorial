<?php
// function = block of code that can be executed to do something

function sayHello(){
    echo "good morning";
}

sayHello();//basiccaly call the function 


//function sayHello($name){
   // echo "good morning $name";
//}

//sayHello('mario');
//let say i set $name as mario the output will be good morning mario


//function sayHello($name = 'shaun'){
  //echo "good morning";
//}

//sayHello();
//because you set the default value of $name = shaun it will sat good morning shaun even if yu dont pass it
//pass it basically mean 'sayHello(pass it);' 

function fortmatProduct($product){
  //  echo "$product['name']} cost ${$product['price']} to buy <br />";
  return "$product['name']} cost ${$product['price']} to buy <br />";
}

$formatted = fortmatProduct(['name' =>'gold star' , 'price' => 20]);
echo $fortmatted;








?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorial video 12</title>
      <body>

</body>
</html>