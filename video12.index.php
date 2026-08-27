<?php
//break and continue (continue or break from loop)
$products = [
    ['name'=>'shiny star', 'price'=>20],
    ['name'=>'green shell', 'price'=>10],
    ['name'=>'red shell', 'price'=>15],
    ['name'=>'banana skin', 'price'=>5
    ['name'=>'mushroom', 'price'=>40]
];


foreach($products as $product){

if($product['name'] ==='red shell'){
    break;
}
//break = it will scan until it reach red shell and forget about the loop and no longer loop
//basically when it reach red shell it stop

if($product['price'] > 15){
 continue;   
}
//continue = it will go at the top of the loop while skip the code but it will continue to the next prduct
echo $product['name'] . 'br />';


}














?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorial video 12</title>
      <body>

</body>
</html>