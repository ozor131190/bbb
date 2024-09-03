<?php


echo "string";
echo "<br>";


$programminglanguages = ['PHP' , 'JAVA' , 'PYTHON'];

array_push($programminglanguages, 'c++' , 'bla');



echo "<pre>";
print_r($programminglanguages);
echo "</pre>";
echo count($programminglanguages);

echo "<br>";

echo "<pre>";
var_dump($programminglanguages);
echo "</pre>";


 ?>
 
 <?PHP 
$programminglanguages = [

'PHP' => '8',
'JAVA' => '3.9'

];

print_r($programminglanguages);

echo "<br>";
echo "<pre>";
var_dump($programminglanguages);
echo "</pre>";

 ?>


 <?php

$MyInformation = [

'info' => 
[
'myname' => 'Ahmad Ozor' , 
'profession' => 'web developer',
'website' => 'www.php.net',
'isopensource' => true,


'versions' => [
['version1' => 8 , 'releasedate' => 'nov - 13 - 1990'],
['version2' => 7 , 'releasedate' => 'nov - 13 - 2000'],
],
],
];

echo "<pre>";

print_r($MyInformation);

echo "</pre>";

echo "<pre>";

echo "My Name Is : ".$MyInformation['info']['myname'];

echo "</pre>";

echo "<pre>";

echo "Version  : ".$MyInformation['info']['versions']['0']['version1'];

echo "</pre>";


echo "<pre>";

echo "WebSite Name : ".$MyInformation['info']['website'];

echo "</pre>";


$array1 = ['a' , 'b' , 50 => 'c' , 'd'];

echo "<pre>";

print_r($array1);

echo "</pre>";

echo array_pop($array1); // get and remove  the last unit of array
echo "<br>";
print_r($array1);
echo "<br>";
echo array_shift($array1); // get and remove the first unit of array
echo "<br>";
print_r($array1);
echo "<br>";
echo "<br>";
echo "<br>";

// unset($array); unset the array 
 ?>


 <?php 


$x = 5;

var_dump((array) $x);

echo "<br>";
echo "<br>";

$array2 = ['a' =>100 , 'b' =>Null];



echo "<pre>";
print_r($array2);

echo "<br>";

var_dump(array_key_exists('a' , $array2)); // check if unit or key has value even if Null 
var_dump(array_key_exists('b' , $array2));
echo "<br>";


var_dump(isset($array2['a'])); // check if unit or key has value...false if null
var_dump(isset($array2['b']));

echo "</pre>";
 ?>


 <?php 

$x = 4;

$y= 5;

var_dump($x **= 4);
echo "<br>";

var_dump($y *=  5 );


// logical opertators &&

$a = 1;
$b = 1;
echo "<br>";
echo "&& operations :<br>";
var_dump($a && $b);
echo "<br><br><br>";
 ?>


 <?php 
// while loops and if loop
echo 'this is variable i:<br>';
 $i = 0;
  while ($i <= 10) {
  	 	echo  $i++ .',';
  }
 
 echo "<br><br><br>";


 $w = 0;

 while (true) {
 	if ($w >= 15) {
 		break;
 	}
 echo $w++.',';
 }

 ?>