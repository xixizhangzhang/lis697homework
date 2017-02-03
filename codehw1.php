<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
//this is challenge #1
$change = 348;
$dollar = (int)($change / 100);
$quarter = (int) (($change - $dollar * 100)/25);
$dime = (int) (($change - $dollar * 100 - $quarter * 25)/10);
$nickel = (int) (($change - $dollar * 100 - $quarter * 25 - $dime * 10)/5);
$cent = (int) (($change - $dollar * 100 - $quarter * 25 - $dime * 10 - $nickel * 5)/1);
echo "You are due $change cents back in change total";
echo "<p> You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickel nickel(s), $cent cent(s)";
//challege #1 ends here

//this is challenge #2
$bottle = 99;
$less_bottle = $bottle - 1;
for ($bottle = 99; $bottle > 2; --$bottle) {
	echo "<p>$bottle bottles of beer on the wall, $bottle bottles of beer!";
  echo "<p>Take one down, pass it around, $less_bottle bottles of beer on the wall!";
  --$less_bottle;
}
for ($bottle == 2; $bottle > 1; --$bottle){
  echo "<p>$bottle bottles of beer on the wall, $bottle bottles of beer!";
  echo "<p>Take one down, pass it around, $less_bottle bottle of beer on the wall!";
  --$less_bottle;
}
for ($bottle == 1; $bottle > 0; --$bottle){
  echo "<p>$bottle bottle of beer on the wall, $bottle bottle of beer!";
  echo "<p>Take one down, pass it around, $less_bottle bottle of beer on the wall!";
  --$less_bottle;
}
//challenge #2 ends here
?>
</body>
</html>
