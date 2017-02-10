<html>
<head>
  <style>
  .header{
    color: #F17274;
    font-weight: bold;
    font-size: 16pt;
  }
  .header2{
    color: #2E1537;
    /*font-weight: bold;*/
    font-size: 13pt;
  }
  .header1{
    color: #2E1537;
    font-weight: bold;
    font-size: 13pt;
  }
  img {
    height: 50px;
    width: auto;
  }
  </style>
</head>
<body>
<?php
//challenge #1 begins here
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
//challenge #1 ends here

//change #2 begins here
echo "<p class=\"header\">Challenge #2: Coin Toss" . "<br>";
//part a starts here
//a outer for loop to decide #of rows
echo "<p class=\"header1\"> Part A";
for ($i=1; $i<=5; ++$i){
  $flips = 2 * $i -1;
  echo "<p class=\"header2\">Flipping a coin $flips time..." . "<br>";
  echo"<p>";
  //an inner for loop to decide how many flips in each row
  for ($k=1; $k<2*$i; ++$k){
    //a variable to toss coins
    $identifier = (mt_rand(0, 1));
    if ($identifier == 0) {
      echo '<img src="animal.jpg" alt="icon" />';
    } else {
      echo '<img src="people.jpg" alt="icon" />';
    }
  }
  echo"<p>";
}
//part b starts here
echo "<p class=\"header1\"> Part B";
echo "<p class=\"header2\">Beginning the coin flipping..." . "<br>";
//a variable to decide how many coins to toss
// $f = (mt_rand(2,9));
//a for loop to toss the coins
// for ($i=1; $i<=$f; ++$i) {
//   $identifier = (mt_rand(0, 1));
//   if ($identifier == 0) {
//     echo '<img src="animal.jpg" alt="icon" />';
//   } else {
//     echo '<img src="people.jpg" alt="icon" />';
//   }
// }
//a variable to record coin toss result
$key = 0;
//a counter to count the number of tosses
$count = 0;
do {
  ++$count;
  //a variable to toss coins
  $result = (mt_rand(0, 1));
  if ($result == 0) {
      echo '<img src="animal.jpg" alt="icon" />';
    } else {
      echo '<img src="people.jpg" alt="icon" />';
    }
  //a if condition to check if $result is equal to "people"
  if ($result == 1) {
    //an inner if condition to check if $key is equal to "people"
    if ($key == $result) {
      echo "<p>Flip two heads in a row, in $count flips";
      break;
    } else $key = 1; //if $resilt is equal to "people" but $key is not equal to "people" then set $key to "people" and run the loop again to see if next $result is euqal to "people" or not
  } else $key = 0;
} while (true);

?>
</body>
</html>
