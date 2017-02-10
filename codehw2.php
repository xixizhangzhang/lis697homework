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
$ISBN = 9992158107;
$check10 = (int)($ISBN / 1000000000)*10;
$check9 = (int)(($ISBN - $check10)/1000000000)*9;
$check8 = (int)(($ISBN - $check10 - $check9)/100000000)*8;
$check7 = (int)(($ISBN - $check10 - $check9 - $check8)/10000000)*7;
$check6 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7)/1000000)*6;
$check5 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6)/100000)*5;
$check4 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5)/10000)*4;
$check3 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5 - $check4)/1000)*3;
$check2 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5 - $check4 - $check3)/100)*2;
$check1 = (int)(($ISBN - $check10 - $check9 - $check8 - $check7 - $check6 - $check5 - $check4 - $check3 - $check2)/10)*1;
echo "<p>You are due"
?>
</body>
</html>
