<!-- 1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.-->
<?php
// function trpleSum($a, $b) {
//         return $a == $b ? ($a + $b)*3 : $a + $b;
// }
// echo trpleSum(3,3);
?>
<!-- 2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference -->
<?php
// function absoluteDiff($n){
//     $x = 51;
//     if($n > $x){
//         return ($n - $x)*3;
//     }
// }
// echo absoluteDiff(54);

?>
<!-- 3. Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30. -->
<?php
// function checkNumOrSum($x, $y){
//     return ($x == 30) || ($y == 30) || ($x + $y == 30);
// }
// echo checkNumOrSum(30,20);
?>
<!-- 4. Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200. Go to the editor
Sample Input: -->
<?php
// function test($x) 
// {
//    if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
//             return true;
//      return false;
// }

// var_dump(test(103));
// var_dump(test(90));
// var_dump(test(89));  
?>
<!-- 5. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged -->
 <?php
//  function ifAdded($str){

//     if(strlen($str)>= 2 && substr($str,0,2) == 'if'){
//         return $str;
//     }else{
//         return "if" . $str;
//     }
//  }
//  echo ifAdded('else');
 ?>
 <!-- 6. Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive. -->
<?php
// function charRemove($str,$n){
//     return substr($str,0,$n).substr($str,$n+1,strlen($str)-$n);
// }
// echo charRemove('Python',3);
?>
<!-- 7. Write a PHP program to exchange the first and last characters in a given string and return the new string. -->
<?php 
// function exchangeLastChar($str){
// return strlen($str) > 1 ? substr($str,strlen($str)-1).substr($str,1,strlen($str)-2).substr($str,0,1) :$str;
// }
// echo exchangeLastChar('omprakash');

?>
<!-- 8. Write a PHP program to create a new string which is 4 copies of the 2 front characters of a given string. If the given string length is less than 2 return the original string -->
<?php
// function stringfourcopie($str){
//     return strlen($str)> 2 ? substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2): $str ;
// }
// echo stringfourcopie('om prakash');
?>
<!-- 9. Write a PHP program to create a new string with the last char added at the front and back of a given string of length 1 or more -->
<?php
// function test($str){
//     return strlen($str)>0 ? substr($str, strlen($str)-1).$str : 'Errror : No string' ; 
// }
// echo test('Om Prakash');
?>
<!-- 10. Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7. Go to the editor
Sample Input -->
<?php
// function test($n) {
// return $n % 3 == 0 || $n %7 == 0;
// }
// var_dump(test(14));
?>
<!-- 11. Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with the 3 characters added at both the front and back. If the given string length is less than 3, use whatever characters are there -->
<?php
// function test($str){
//     return strlen($str) >3 ? substr($str,0,3).$str.substr($str,0,3) : $str.$str.$str;
// }
// echo test('Py');
?>

<!-- 12. Write a PHP program to check if a given string starts with 'C#' or not -->
<?php
// function test($str){
// return substr($str,0,2) == 'c#'?true:false;
// }
// var_dump(test('casa'));
?>
<!-- 13. Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100 -->
<?php
// function test($temp1,$temp2){
//     return $temp1 < 0 && $temp2 > 100 || $temp2 < 0 && $temp1 > 100;
// }
// var_dump(test(-1,108));
?>
<!-- 14. Write a PHP program to check two given integers whether either of them is in the range 100..200 inclusive. -->
<?php
// function test($x,$y){
//     return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
// }
// var_dump(test(250,300));
?>
<!-- 18. Write a PHP program to check the largest number among three given integers. -->
<?php
// function test($arr){
// return max($arr);
// }
// $arr = [1,100,-300];
// echo test($arr);
?>
<!-- 19. Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal -->
<?php
// function test($x,$y){
//     $n = 100;
//     $val = abs($x - $n); //0
//     $val2 = abs($y - $n);//100
//     return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
// }
// echo test(100,200);
?>
<!-- 20. Write a PHP program to check whether two given integers are in the range 40..50 inclusive, or they are both in the range 50..60 inclusive -->
<?php
// function test($x,$y){
// // return ($x >= 40 && $x <=50 && $y>=40 && $y <=50)||($x >= 50 && $x<=60 && $y>=50 && $y<=60);
// }
// echo var_dump(test(78, 100));
?>
<!-- 1. $color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string - Go to the editor
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $co -->
<?php
// function test($color){
//     return "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[0] lawn, the $color[1] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
// }
// $color = array('white', 'green', 'red', 'blue', 'black');
// echo test($color);
?>
<?php
// $color = array('white', 'green', 'red');
// echo "<ul>";
// foreach($color as $value){
// echo "<li> $value</li>";
// }
// echo "<ul>"

?>
<!-- Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country -->
<?php
// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
// asort($ceu);
// echo "<ul>";
// foreach($ceu as $con=>$cap){
//     echo "<li>"."The capital of $con is $cap"."</li>" ;
// }
// echo "</ul>";

?>
<!-- 4. $x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized -->
<?php
// function w3rfunction($value,$key)
// {
// echo "$key : $value"."\n";
// }
// $a = '{"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail":
// { 
// "Publisher": "Little Brown"
//  }
//   }';
// $j1 = json_decode($a,true);
// array_walk_recursive($j1,"w3rfunction");
?>
<!-- 7. Write a PHP script that inserts a new item in an array in any position. Go to the editor -->
<?php
// $original = array( '1','2','3','4','5' );
// $inserted = '$';

// array_splice($original,3,0,$inserted);
// foreach($original as $value){
//     echo $value;
// }
// =======================================



$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',',$month_temp);
$sum = 0;
foreach ($temp_array as $value){
$sum += $value;
}
echo 'Average Temperature: '.$sum/count($temp_array);
echo '<br>';
sort($temp_array);
for($i=1;$i<=5;$i++){
    echo $temp_array[$i];
}
echo '<br>';
for($i = count($temp_array)- 5 ; $i < count($temp_array); $i++){
    echo $temp_array[$i].", ";
}


?>

