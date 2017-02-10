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
echo "<p class=\"header\">Challenge #1: ISBN Validation";
//define ISBN as a string
$ISBN = "996215820X";
// $check10 = (int)($ISBN / 1000000000)*10;
// $check9 = (int)(($ISBN - $check10)/1000000000)*9;
// $check8 = (int)(($ISBN - $check10 - $check9)/100000000)*8;
// $check7 = (int)(($ISBN - $check10 - $check9 - $check8)/10000000)*7;
// $check6 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7)/1000000)*6;
// $check5 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6)/100000)*5;
// $check4 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5)/10000)*4;
// $check3 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5 - $check4)/1000)*3;
// $check2 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5 - $check4 - $check3)/100)*2;
// $check1 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5 - $check4 - $check3 - $check2)/10)*1;
// $digit = 9;
// $minus = 0;
// $check1 = 0;
// $check2 = 0;
// $total = 0;
// if ($digit == 9) {
//   $check1 = (int)(($ISBN) / pow(10, $digit)) * ($digit+1);
// }
//
// for ($digit == 8; $digit >= 0; --$digit) {
//   $minus = $minus + (int)($ISBN / pow(10, $digit+2)) * pow (10, $digit+2);
//   $check2 = $check2 + (int)(($ISBN - $minus) / pow(10, $digit)) * ($digit+1);
// }
// $total = $check1 + $check2;
//
// echo "you have $total";

// $string_isbn = "$ISBN";
$total8 = 0;
//a for loop to check digit number in each place except the last digit, and then add them together
for ($count=0; $count<9; ++$count) {
    $each_check = substr($ISBN, $count, 1) * (10-$count);
    $total8 = $total8 + $each_check;
}
//a if condition to check the last digit, if last digit is equal to X, then use 10
if (substr($ISBN, 9, 1) == "X") {
    $check9 = 10 * 1;
} else {
  $check9 = substr($ISBN, 9, 1) * 1;
}
//add all together
$total = $total8 + $check9;
//a if condition to check if the ISBN is validity
if ($total % 11 == 0) {
  echo "<p>Checking isbn $ISBN for validity......";
  echo "<p>This is a valid ISBN!";
} else {
  echo "<p>Checking isbn $ISBN for validity......";
  echo "<p>This is NOT a valid ISBN!";
}



?>
</body>
</html>
