<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$mynewarray = array ("Fruit"=>"Apple", "Quantity"=>12, "Price per pound"=>12.2);
$mynewarray[2]= "Blueberry";
$mynewarray['Color']= "Red";
echo "My favorite fruit is ". $mynewarray["Fruit"];
print_r ($mynewarray);
array_push($mynewarray, "Texture", "Crispy");
print_r ($mynewarray);
unset($mynewarray[3]);

$mynamearray = array ("Xi", "Xiao", "Zhang");
print_r ($mynamearray[1]);
unset ($mynamearray[1]);
$mynamearray[1] = "Xiao";
print_r($mynamearray);
foreach ($mynamearray as $each_item) {
  echo "<br>" . $each_item;
}

$mynamearray = array ("firstname"=>"Xi", "middlename"=>"Xiao", "lastname"=>"Zhang");
print_r ($mynamearray['lastname']);
unset ($mynamearray['lastname']);
$mynamearray['lastname'] = "Zhang";
foreach ($mynamearray as $each_key => $each_value) {
  echo "<br> $each_key" . $each_value;
}

$grade = array ("233255435"=>"95.9", "234832893"=>"82.33", "238385555"=>"85.2", "272727237"=>"72.0", "334844855"=>"86.5");
foreach ($grade as $each_key => $each_value) {
  echo "<br> Student id " . $each_key . " received a grade of " . $each_value;
};
$sum = array_sum ($grade);
$average = $sum / count ($grade);
echo "<br> Overall average score is ". $average;
$minimum = min($grade);
echo "<br> Minimum value is ". $minimum;
$maxmum = max ($grade);
echo "<br> Maxmum value is ". $maxmum;

$product = array (
  array ("Apple", "Red", 2.30),
  array ("Banana", "Yellow", 0.67),
  array ("Orange", "Orange", 1.70),
);
$product1 = array (
  "Apple" => array ("color"=>"red", "price" => "2.30"),
  array ("Banana", "Yellow", 0.67),
  array ("Orange", "Orange", 1.70),
);

echo "<br>" . $product[1][2];
?>
</body>
</html>
