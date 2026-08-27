<?php

// variable scope

//local vars

function myFunc(){
    $price = 10;
    echo $price;
}

//myFunc();
//echo $price;

function myFuncTwo($age){
echo $age;
}

myFuncTwo(25);
echo $age;

//global variables

$name = 'mario';

//function sayHello(){
    //$name = 'shaun'//this will work bc they find this variable
   //// global $name; //this world bc it a global variable
   // $name = 'yoshi';
   // echo "hello $name";
//}

//sayHello();
//echo $name;

function sayBye($name){
    $name = 'wario';
    echo "bye $name";
}

sayBye($name);
echo $name;


?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorial video 14</title>
      <body>

</body>
</html>