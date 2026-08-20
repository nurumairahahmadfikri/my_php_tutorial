<?php
//i can do $name or NAME but the difference is that $name can be changed but NAME cannot be changed
define('NAME', 'Duckies');
  //$name = "Duckies";
  $age = 30;

  // string are a sequence of characters
 $stringOne = 'my email is ';
 $stringTwo = 'duckss123@gmail.com';
  //$name = "Ducks";
 // echo $stringOne.$stringTwo;
   
  // echo 'Hey, my name is '.NAME;

  //echo "the duck sound \"Quack\"";
  //echo 'the duck sound "Quack"';

 // echo NAME[0];

 //echo strlen(NAME);
//echo strtoupper(NAME);
//echo strtolower(NAME);
//echo str_replace('D', ' q', NAME);

$radius =25;
$pi = 3.14;

//basic operators - *, /, +, -, **
//echo $pie * $radius ** 2;
//order of operation (B I D M A S)
//echo 2 * (4 + 9) / 3 ;

//inrement & decrement operators
//add values to number or minus values to number
//echo $radius--;
//echo $radius;

//short hand operators
$age = 20;

//$age = $age + 10; //it will be 30
//$age += 10;
//echo $age;

//$age -= 10;
//echo $age; //the answer will be 10
//$age *= 2;
//echo $age; //the answer will be 40

//number functions
//floor() - rounds down to the nearest whole number
//echo floor($pi);
//echo ceil($pi); //rounds up to the nearest whole number
//echo pi();//return value of pi


//yes i am half asleep whilewriting these notes

//arrayyyyyyyyy

//Indexed array
$peopleOne = ['Dewy', 'Louie', 'stewie'];
//echo $peopleOne[1]

$peopleTwo = array('ken', 'kim');
//echo $peopleTwo[0];

$age = [20, 30, 40, 50];
//print_r($age); //print_r() is used to print the array

$age[1] = 25;
//print_r($age);

$age[] = 60; //add new value to the array
//print_r($age);

array_push($age,70); //add new value to the array

echo count($age); //count() is used to count the number of values in the array

$peopleThree = array_merge($peopleOne, $peopleTwo); //array_merge() is used to merge two arrays
//print_r($peopleThree);

//associative array (key value pair)

$duckOne = ['Dewy'=>'red', 'Stewie'=>'blue', 'Louie'=>'green'];
//echo $duckOne['Dewy']; //it will return red
//print_r($duckOne); 

$duckTwo = array('ken'=>'yellow', 'kim'=>'pink');
//print_r($duckTwo);

$duckTwo['ken'] = 'orange'; //change the value of ken to orange
//print_r($duckTwo);

//echo count($duckOne); 
//$duckThree = array_merge($duckOne, $duckTwo); //merge two associative arrays


//multi-demensional array

//$blogs = [
//['Dipper Pines', 'Gravity Falls', 2012],
//['Mabel Pines', 'Gravity Falls', 2012],
//['Stanley Pines', 'Gravity Falls', 2012]
//];

//print_r($blogs[1][1]); 

$blogs = [
    ['title'=>'Gravity Falls', 'author'=>'Dipper Pines', 'year'=>2012, 'likes'=>100],
    ['title'=>'Gravity Falls', 'author'=>'Mabel Pines', 'year'=>2012, 'likes'=>150],
    ['title'=>'Gravity Falls', 'author'=>'Stanley Pines', 'year'=>2012, 'likes'=>200]
]
 
//echo $blogs[2]['author']; //it will return Stanley Pines
//echo count($blogs); //it will return 3 because there are 3 arrays in the multi-dimensional array

$blogs[] =
['title'=>'Gravity Falls', 'author'=>'Soos Ramirez', 'year'=>2012, 'likes'=>250];

//print_r($blogs);

//array pop
//$popped = array_pop($blogs); //remove the last array from the multi-dimensional array
//print_r($popped); //it will return the last array that was removed


//Loops

$duckQuack = ['Dewy', 'Stewie', 'Louie'];

//for($i = 0; $i < count($duckQua); $i++){
//echo $duckQuack[$i].'<br/>';{

//foreach($duckQuack as $duck){
 //   echo $duck.'<br/>';
//}

$products = [
    ['name'=>'shiny star', 'price'=>20],
    ['name'=>'green shell', 'price'=>10]
    ['name'=>'red shell', 'price'=>15],
    ['name'=>'banana skin', 'price'=>5]
]

//foreach($products as $product){
   // echo $product['name'] .' - ' . $product['price'];
   // echo '<br/>';
//}

//$i = 0; //initialize the value of i to 0

//while($i < count($products)){
   // echo $products[$i]['name'];
   // echo '<br/>';
   // $i++; //increment the value of i by 1
//}



//yes im still half asleep while writing these notes



//boleans

<?php

$products = [
    ['name'=>'shiny star', 'price'=>20],
    ['name'=>'green shell', 'price'=>10],
    ['name'=>'red shell', 'price'=>15],
    ['name'=>'banana skin', 'price'=>5
    ['name'=>'mushroom', 'price'=>40]
];

while($i < count($products)){
    echo $products[$i]['name'];
    echo '<br/>';
    $i++;

    //comparison booleans (true or false)
    //echo true;"1"
    //echo false; ""

 //numbers
 //echo 5 < 10; //true
 //echo 5 == 10; //false
 //echo 5 > 10; //false   
//echo 10 == 10; //true
//echo 5 != 10; //true

//string
//echo 'Dewy' < 'Louie';
//basiccally, it will compare the first letter of each string and return true if the first letter of the first string is less than the first letter of the second string
//same goes if the letter is 's' is smaller than 'S'

 //loose vs strict equal comparison
//echo 5 == '5'; //true //this is true because it will convert the string to a number and then compare the two values
//echo 5 === '5'; //false  //this is fale because it will not convert the string to a number and then compare the two values  
//echo 5 === 5; //true // this is true because it will compare the two values and return true if they are equal and of the same type

echo true == "1"; //true
echo false == ""; //true
}

 ?>

 <!DOCTYPE html>
 <html>
    <head>
        <title>my first PHP file</title>
</head>
<body>

<h1><?php echo 'Hello, Duckies'; ?></h1>
<ul>
    <?php foreach($products as $product){?>

<h3><?php echo $product['name']; ?></h3>
<p><?php echo $product['price']; ?></p>

    <?php } ?>
     // this is a foreach loop that will loop through the products array and display the name and price of each product
</ul>

<div><?php echo NAME; ?></div>
<div><?php echo $age; ?></div>

</body>
</html>