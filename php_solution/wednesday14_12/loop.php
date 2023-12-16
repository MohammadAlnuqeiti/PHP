<?php
//-----------   1  ---------------//

$array=[1,2,3,4,5,6,7,8,9,10];
for ($i=0;$i<count($array);$i++){
    if ($i==count($array)-1){
        echo $array[$i];
        break;
    }
    echo $array[$i]."-";
}
echo "<hr>";
//-----------   2  ---------------//

for($i=0;$i<5;$i++){

    if ($i==0){
        for($one=0;$one<5;$one++){
            echo "A";

        }
        echo "<br>";
    }
    if ($i==1){
        for($two=0;$two<5;$two++){
            if($two<=2){
            echo "A";
            }else{
            echo "B";
 
            }
        }
        echo "<br>";
    }
    if ($i==2){
        for($three=0;$three<5;$three++){
            if($three<=1){
            echo "A";
            }else{
            echo "C";
 
            }
        }
        echo "<br>";
    }
    if ($i==3){
        for($four=0;$four<5;$four++){
            if($four<1){
            echo "A";
            }else{
            echo "D";
 
            }
        }
        echo "<br>";
    }
    if ($i==4){
        for($five=0;$five<5;$five++){
       
            echo "E";
         
        }
        echo "<br>";
    }
    
}
echo "<hr>";

//-----------   3  ---------------//

for($i=0;$i<5;$i++){

    if ($i==0){
        for($one=0;$one<5;$one++){
            echo 1;

        }
        echo "<br>";
    }
    if ($i==1){
        for($two=0;$two<5;$two++){
            if($two<=2){
            echo 1;
            }else{
            echo 2;
 
            }
        }
        echo "<br>";
    }
    if ($i==2){
        for($three=0;$three<5;$three++){
            if($three<=1){
            echo 1;
            }else{
            echo 3;
 
            }
        }
        echo "<br>";
    }
    if ($i==3){
        for($four=0;$four<5;$four++){
            if($four<1){
            echo 1;
            }else{
            echo 4;
 
            }
        }
        echo "<br>";
    }
    if ($i==4){
        for($five=0;$five<5;$five++){
       
            echo 5;
         
        }
        echo "<br>";
    }
    
}
echo "<hr>";
//-----------   6  ---------------//
$nums=5;
$nums2=1;
for ($i=1;$i<=$nums;$i++){
    $nums2*=$i;
}
echo $nums2;

echo "<hr>";
//-----------   7  ---------------//

// $nu=0;
// $x=0;

// for($i=0;$i<25;$i++){
//     $z=0;
//     // $x+=$nu;
//     $nu+=$x;
//     $x=$nu;
//     $z=$x+$nu;
//     echo $z . " , ";
//     if ($nu ==0){
//         ++$nu;
//     }
   


// }
 $array=[0,1];
 $nn=10;
for ($i=2;$i<=$nn;$i++){
   $array[$i]=$array[$i-2]+$array[$i-1];

}
print_r($array);
echo "<br>";

$a=implode(" , ",$array);
print_r($a);
echo "<hr>";
//-----------   8  ---------------//
$text= "Orange Coding Academy";
$n=0;
for ($i=0;$i<strlen($text)-1;$i++){
    if ($text[$i]=="c" || $text[$i]=="C"){
        $n+=1;
    }
}
echo $n;

echo "<hr>";
//-----------   9  ---------------//

echo "<table style=\"padding:3px; border:1px solid black;spacing:0px \">";
$x=7;
for ( $i=1;$i<$x;$i++){
$a=1;
    echo "<tr style=\"padding:3px; border:1px solid black;spacing:0px \">";
    echo "<td style=\"padding:3px; border:1px solid black;spacing:0px \">" . $i ."*" .$a ."=" . $i*$a . "</td>";
    ++$a;
    echo "<td style=\"padding:3px; border:1px solid black;spacing:0px \">" . $i ."*" .$a ."=" . $i*$a . "</td>";
    ++$a;
    echo "<td style=\"padding:3px; border:1px solid black;spacing:0px \">" . $i ."*" .$a ."=" . $i*$a . "</td>";
    ++$a;
    echo "<td style=\"padding:3px; border:1px solid black;spacing:0px \">" . $i ."*" .$a ."=" . $i*$a . "</td>";
    ++$a;
    echo "<td style=\"padding:3px; border:1px solid black;spacing:0px \">" . $i ."*" .$a ."=" . $i*$a . "</td>";

    echo "</tr style=\"padding:3px; border:1px solid black;spacing:0px \">"."<br>";
    ++$a;
}
echo "</table>";
echo "<hr>";
//-----------   9  ---------------//
echo "<hr>";
//-----------   11  ---------------//

$n=5;
$nums=1;
for($i=0;$i<5;$i++){
    for($x=0;$x<=$i;$x++){
        echo $nums . " ";
        $nums+=1;
    }
    echo "<br>";
}
