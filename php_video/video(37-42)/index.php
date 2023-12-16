<?php
// 37

  /*
    Control Structure
    - Loop

    While
  */

  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";

  $i = 1;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  $a = 1;

  while ($a <= 3) :

    echo "$a<br>";

    $a++;

  endwhile;
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  ?>
 <?php

// 38

  /*
    Control Structure
    - Loop

    Do, While
  */

  $i = 4;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }
  echo '<br>';
  echo '<br>';
  do {

    echo "$i<br>";

    $i++;

  } while ($i <= 3);


  $index = 0;

  while ($index <= 100) {

    echo "$index<br>";

    $index += 5;

  }
  ?>
  <?php
// 39
/*
  Control Structure
  - Loop

  For
  - Expression One Run Once At The First Of The Loop
  - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
  - At The End Of Iteration Expression Three Are Executed
*/
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
$i = 1;

while ($i <= 3) {

  echo "$i<br>";

  $i++;

}

echo '##### <br>';

for ($i = 1; $i <= 3; $i++) {

  echo "$i<br>";

}

echo '##### <br>';

$index = 1;

for (;;) :

  if ($index == 4) {

    break;

  }

  echo "$index<br>";

  $index++;

endfor;
?>

<?php 
// 40

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
  /*
    Control Structure
    - Loop

    Foreach
  */

  $countries = ["EG", "SA", "QA", "SY"];

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  foreach ($countries as $country) {
if ($country=="QA"){
    echo $country . "<br>";
}
  }

  $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

  echo '<pre>';
  print_r($countries_with_discount);
  echo '</pre>';

  foreach ($countries_with_discount as $country => $discount) :

    echo "Country Name Is $country And Discount Is $discount <br>";

  endforeach;

?>
<?php

// 41
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/*
  Control Structure
  - Loop

  Break, Continue
  - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
  - Skip Current Iteration
*/

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  if ($country == "USA") {

    break;

  }

  echo $country . "<br>";

}

echo "########## <br>";

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  if ($country == "USA") {

    continue;

  }

  echo $country . "<br>";

}

?>
<?php
// 42
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/*
  Control Structure
  - Including Files

  Include
  Require
*/

include_once("test.php"); // $a = 10;

echo $a . '<br>';

$a = 20;

include_once("test.php"); // $a = 10;

echo $a . '<br>';

echo "Continue";
?>

<?php 
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "===================================================";
// ------------------------- challenge(37-42) ----------------------------- //
echo '<br>';
// 1
$index = 10;

while ($index>0){
    echo "$index <br>";
    $index--;
}
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1
//-----------------------------------
echo '<br>';
echo '<br>';
// 2

$index = 0;
while ($index<=20){
    if ($index==0){
        $index+=2;
        continue;
    }
    echo "$index <br>";
    $index+=2;
}
echo '<br>';
echo '<br>';

for ($index = 0;$index <=20;$index +=2){
    if ($index==0){
    
        continue;
    }
    echo "$index <br>";
}
echo '<br>';
echo '<br>';
$index = 0;

do {
    if ($index==0){
        $index+=2;
        continue;
    }
    echo "$index <br>";
    $index+=2;
  
}while ($index<=20);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
//----------------------------------------------

// 3
$num = 2;
while ($num < 520) {
  // Your Code Here
  if ($num==2){
    echo --$num;
    echo "<br>";
  }
  if ($num==382){
    break;
  }
  echo $num=++$num*2;
  echo "<br>";
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

//------------------------------------------------------
// 4
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$end = 0;



for ($start = 10;$start>=$stop = 3;$start-- ){
    if ($start<10){
        echo $end . $start ."<br>";
       
        continue;
    }

echo "$start <br>";
}
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03


//------------------------------------------------------
// 5
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($start=0;$start<count($mix);$start++){
  if (gettype($mix[$start])==gettype(1)){
    if ($mix[$start] == 1){
      continue;
    }
    echo "$mix[$start] <br>";
  }
}                                                                                                                                                               
 

// Output
// 2
// 3
// 4

//-------------------------------------------
// 6
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $name => $mone){
    echo "The Name Is $name And I Need $mone Pound From Him";
    echo "<br>";
}
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"
//-------------------------------------------
// 7
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
$mix = [1, 2, "A", "B", "C", 3, 4];
$num=0;
$str=0;
for ($i = 0 ; $i < count($mix);$i++){
  if (gettype($mix[$i])==gettype(1)){
echo $mix[$i];
echo '<br>';
$num+=1;
  }else{
    $str+=1;
  }
}
echo "$num Numbers Printed";
echo '<br>';
echo "$str Letters Ignored";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"

//-------------------------------------------
// 8
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach($nums  as  $value){
    if ($value  % 2 == 0 ){
        echo $value/2;
        echo "<br>";
    }
}
// Output
// 6
// 10
// 15
//-------------------------------------------
// 9
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($help_num =$nums[$help_num];$help_num<=$nums[4];$help_num++){
    echo $names[$help_num];
    echo "<br>";
}
// Output
// "Sayed"
// "Osama"
//-------------------------------------------
// 10
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $key => $numm){

    echo  $numm . '+' .  $nums[$help_num-$key] . '=' . $numm+$nums[4-$key] . '<br>';

}
// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
?>