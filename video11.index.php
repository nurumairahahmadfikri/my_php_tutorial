<?php

//condition statements

//check if a condition is true or false
//if that condition passes or if that condition is true then do 1 thing
//if it doesnt pass maybe do another instead

//$price = 20;
//if($price < 30){
//echo 'the condition is met';
//it will show the condition is met because 20 is less than 30


//$price = 20;
//if($price < 10){
   // echo 'the condition is met';
//} elseif ($price< 30){
   // echo 'elseif condition met';
//}else {
   // echo 'condition not met';
//}

//basically if let say you put 20 right? it will show
//condition is met but if you put 30 or above it will say elself condition is met nc it abobe 20
//if you put let say 2 it will show condition is not met bc it below 20

//$products = [
 //   ['name'=>'shiny star', 'price'=>20],
 //   ['name'=>'green shell', 'price'=>10],
 //   ['name'=>'red shell', 'price'=>15],
  //  ['name'=>'banana skin', 'price'=>5
  //  ['name'=>'mushroom', 'price'=>40]
//];

//foreach ($products as $product){

//if($product['price'] < 15 && $product['price']>2){
  //  echo $product['name'] . <br />';
//}

//if($product['price'] > 20 || && $product['price'] < 10){
  //  echo $product['name'] . <br />';
//}
   // }











?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorial video 11</title>
      <body>

      <div>
        <ul>
            <?php foreach($products as product){ ?>  //
            <?php of (%product['price'] > 15){ ?>
<li><?php echo $product['name']; ?></li>
      <?php } ?>
      <?php } ?>     
</ul>
</div>


</body>
</html>