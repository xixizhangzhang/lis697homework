<!DOCTYPE html>
<html>
<head>
  <style>
  .header{
    color: #F17274;
    font-weight: bold;
    font-size: 16pt;
  }
  </style>
</head>
<body>
<?php
//this is challenge #1
echo "<p class=header>Challenge #1: Correct Change";
$change = 348;
$dollar = (int)($change / 100);
$quarter = (int) (($change - $dollar * 100)/25);
$dime = (int) (($change - $dollar * 100 - $quarter * 25)/10);
$nickel = (int) (($change - $dollar * 100 - $quarter * 25 - $dime * 10)/5);
$cent = (int) (($change - $dollar * 100 - $quarter * 25 - $dime * 10 - $nickel * 5)/1);
echo "<p>You are due $change cents back in change total";
echo "<p> You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickel nickel(s), $cent cent(s)";
//challege #1 ends here

//this is challenge #2
echo "<p class=header>Challenge #2: 99 Bottles of Beer";
$bottle = 99;
$less_bottle = $bottle - 1;
for ($bottle = 99; $bottle > 2; --$bottle) {
	echo "<p>$bottle bottles of beer on the wall, $bottle bottles of beer!";
  echo "<p>Take one down, pass it around, $less_bottle bottles of beer on the wall!";
  --$less_bottle;
}
//this for loop aims to make 1 bottle singlar
for ($bottle == 2; $bottle > 1; --$bottle){
  echo "<p>$bottle bottles of beer on the wall, $bottle bottles of beer!";
  echo "<p>Take one down, pass it around, $less_bottle bottle of beer on the wall!";
  --$less_bottle;
}
//this for loop aims to make 1 and 0 bottle singlar
for ($bottle == 1; $bottle > 0; --$bottle){
  echo "<p>$bottle bottle of beer on the wall, $bottle bottle of beer!";
  echo "<p>Take one down, pass it around, $less_bottle bottle of beer on the wall!";
  --$less_bottle;
}
//challenge #2 ends here
?>
</body>
</html>
