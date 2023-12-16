<?php 

//-----------   1  ---------------//

$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
echo "<hr>";
//-----------   2  ---------------//
// $temp =25 ;
// if ($temp<=20){
//     echo "It is wintertime!";
// }else {
//     echo "It is summertime!";
// }

//-----------   3  ---------------//

// $num1=2;
// $num2=2;

// if($num2 ===$num1) {
//     echo (3*($num1+$num2));
// }else {
//     echo (($num1+$num2));
// }

//-----------   4  ---------------//

// $num1=2;
// $num2=2;

// if($num2+$num1 ==30) {
//     echo (($num1+$num2));
// }else {
//     echo (("false"));
// }

//-----------   5  ---------------//

// $num2=3;

// if(($num2>0)&& ($num2%3 ==0)) {
//     echo (($num2));
// }else {
//     echo (("false"));
// }

//-----------   6  ---------------//

// $num2=3;

// if(($num2>=20)&& ($num2<=50)) {
//     echo (($num2));
// }else {
//     echo (("false"));
// }

//-----------   7  ---------------//

// $arr=[3,8,-1];
// echo max($arr);

//-----------   8  ---------------//
// $val = 65;
// if ($val>250){
//         $result = (50*2.5)+(100*5)+(100*6.2)+(($val-250)*7.5);
//         echo $result;
//     }elseif ($val>150) {
//         $result = (50*2.5)+(100*5)+(($val-150)*6.2);
//         echo $result;
//     }elseif ($val>50) {
//         $result = (50*2.5)+(($val-50)*5);
//         echo $result;
//     }else {
//         $result = ($val)*2.5;
//         echo $result;
//     }

//-----------   9  ---------------//

// $num1=2;
// $num2=2;
// $op="/";
// switch ($op){
//     case ("/"):
//         echo $num1/$num2;
//         break;
//     case ("*"):
//         echo $num1*$num2;
//         break;
//     case ("+"):
//         echo $num1+$num2;
//         break;
//     case ("-"):
//         echo $num1-$num2;
//         break;
//     default:
//         echo "enter valeid operation";
//         break;
    
// }


//-----------   10  ---------------//
// $age = 5;
// if ($age>=18){
//     echo "is eligible to vote";
// }else {
//     echo "is no eligible to vote";
// }

//-----------   11  ---------------//
// $num = 5;
// if ($num>0){
//     echo "Posetive";
// }elseif($num<0){
//     echo "Negative";
// }else {
//     echo "0";
// }

//-----------   12  ---------------//
// $arr = [90];
// $avg =array_sum($arr)/count($arr);
// if ($avg>=90){
//     echo "A";
// }elseif ($avg>=80){
//     echo "B";
// }elseif ($avg>=70){
//     echo "C";
// }elseif ($avg>=60){
//     echo "D";
// }else {
//     echo "F";
// }
?> 