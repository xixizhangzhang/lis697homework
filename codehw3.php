<!DOCTYPE html>
<html>
<head>
  <style>
  .title{
    color: #F17274;
    font-weight: bold;
    font-size: 16pt;
  }
  .header{
    background-color:#F17274;
  }
  .price{
    width:130px;
    height:25px;
    padding:20px 20px;
    border-radius:10px;
    background-color:#E0DDC9;
    text-align: center;
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
echo "<p class=\"title\">Challenge #1: Book lists";
$header = array ("Title"=>"Title", "firstname" => "First Name","lastname" => "Last Name", "pages" => "Number of pages", "type"=>"Type", "price"=>"Price");
$books = array (
  "firstbook" => array ("Title"=>"PHP and MySQL Web Development", "firstname" => "Luke","lastname" => "Welling", "pages" => "144", "type"=>"Paperback", "price"=>"31.63"),
  "secondbook" => array ("Title"=>"PWeb Design with HTML, CSS, JavaScript and jQuery", "firstname" => "Jon","lastname" => "Duckett", "pages" => "135", "type"=>"Paperback", "price"=>"41.23"),
  "thirdbook" => array ("Title"=>"PHP Cookbook: Solutions & Examples for PHP Programmers", "firstname" => "David","lastname" => "Sklar", "pages" => "14", "type"=>"Paperback", "price"=>"40.88"),
  "fourthbook" => array ("Title"=>"JavaScript and JQuery: Interactive Front-End Web Development", "firstname" => "Jon","lastname" => "Duckett", "pages" => "251", "type"=>"Paperback", "price"=>"22.09"),
  "fifthbook" => array ("Title"=>"JModern PHP: New Features and Good Practices", "firstname" => "Josh","lastname" => "Lockhart", "pages" => "7", "type"=>"Paperback", "price"=>"28.49"),
  "sixbook" => array ("Title"=>"Programming PHP", "firstname" => "Kevin","lastname" => "Tatroe", "pages" => "26", "type"=>"Paperback", "price"=>"28.96"),
);
//table stats
echo "<table border=\"1\">";
foreach ($header as $key => $value) {
  echo "<td class=\"header\"> $value </td>";
};

foreach ($books as $index => $eachbook) {
  echo "<tr>";
	foreach ($eachbook as $key => $value) {
	  echo "<td> $value </td>";
	}
};
echo "</table><p></p>";
//table ends
//price calculates
$price = array_column($books, 'price');
$sum = array_sum ($price);
echo "<div class=\"price\">Your Total Price is <br>$ $sum</div>";
//price ends

//challenge #2 begins here
echo "<p class=\"title\">Challenge #2: Coin Toss Continues" . "<br>";

function cointoss($x) {//a function that takes "the number of heads in a row you'd like to flip" as the paremeter.
  $count = 0;//a counter to calculate how many flips.
  $k = 0;//each toss.
  while ($k<$x) {
    ++$count;
    $i = (mt_rand(0, 1));//toss outcome
    if ($i == 1) {
        echo '<img src="people.jpg" alt="icon" />';
        $k++;
        if ($k == $x) {
          echo "<p>Flip $x heads in a row, in $count flips";
          break;
        }
      } else {
        echo '<img src="animal.jpg" alt="icon" />';
        $k = 0;
      }
  }
};
cointoss(6);//call function.
?>
</body>
</html>
