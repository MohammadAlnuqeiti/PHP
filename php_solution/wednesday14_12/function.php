<?php 


//-----------   1  ---------------//
function primery($nums){
    if ($nums == 1 ){
        echo "$nums is primery number";

    }
   for ($i=2;$i<$nums;$i++){
    if ($nums/$i==1){
        echo "$nums is not primery number";
break;
    }else{
        echo "$nums is primery number";
        break;
    }

   }
  
}

primery(3);
echo "<br>";
primery(11);
echo "<br>";
primery(13);
echo "<br>";
primery(47);
echo "<br>";
primery(59);
echo "<br>";
echo "<br>";

//-----------   2  ---------------//

function revs($str1){
    echo strrev($str1);
}
revs("remove");


echo "<br>";
echo "<br>";

//-----------   3  ---------------//

function lower($str){
    if (ctype_lower($str)){
        echo "Your String is Ok ";
    }else{
        echo "Your String is not Ok ";

    }
}
lower("remove");
echo "<br>";
lower("Remove");
echo "<br>";
echo "<br>";

//-----------   4  ---------------//
function swap($x,$y){
    $nums=$x;
    $x=$y;
    $y=$nums;
echo "x"."=".$x . " , ";
echo "y"."=".$y ."<br>";
}
swap(12,10);
echo "<br>";
function swapp($x,$y){
    $x=$x+$y;
    $y=$x-$y;
    $x=$x-$y;
echo "x"."=".$x . " , ";
echo "y"."=".$y ."<br>";
}
swapp(12,10);
echo "<br>";

//-----------   5  ---------------//

function armstrong($num){
$a = str_split($num);
$num2=0;
for ($i=0;$i<count($a);$i++){
    $x =$a[$i]**3;
    $num2+=$x;

}
if ($num==$num2){
    echo $num ." is Armstrong Number <br>";
}else{
    echo $num ." is not Armstrong Number <br>";

}

}
armstrong(407);
armstrong(500);

//-----------   6  ---------------//

$string ="Eva, can I see bees in a cave?";
$strr=str_replace([","," ","?"],"",$string );
echo ($strr);
function stringg($str){
    $n=0;
for ($i=0;$i<strlen($str);$i++){
    $l = strlen($str)-1;
    
    if ($str[$i]==$str[$l-$i]){
        $n+=1;
    }else{
continue; 
    }
}
echo "<br>";

echo $n;
echo "<br>";

echo strlen($str)-1;
echo "<br>";

if ( $n==strlen($str)-1){
            echo "Yes it is a palindrome";

}else{
    echo "No it is not a palindrome";

}

}
stringg($strr);
echo "<br>";




//-----------   7  ---------------//
echo "<pre>";
$array1 = array(2, 4, 7, 4, 8, 4);
print_r($array1);
$result = array_unique($array1);
print_r($result);
echo "</pre>";

?>
