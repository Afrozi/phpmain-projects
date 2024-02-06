<?php
/*$a = 2;
for ($i=1; $i < 11; $i++) { 
        echo  $a."x".$i."=".$i*$a."<br>";
}*/
/*$a = 2;
if ($a%2==0) {
    echo  "$a is a even number";
}
else {
        echo "$a is a odd number";
}*/
/*for ($i=1;$i<24;$i++) { 
        if ($i%3==0) {
           echo "<br> $i is a prime number";
        }

}*/
 /*$n = 5;
 $fact = 1;
for ($i=$n;$i>=1;$i--) { 
   $fact = $fact*$i;
}
echo $fact;
*/
/*$num = 407;
$total = 0;
$x = $num;
while ($x!=0) {
     $rem = $x%10;
     $total = $total+$rem*$rem*$rem;
     $x = $x/10;  
 }
if ($num==$total) {
        echo "yes it is a armstrong";
     }
     else {
        echo "yes it is a not armtrong";
     }
*/
$m = 2017;
if ($m%4==0) {

        echo "leap years";
}
else {
        echo "no leap years";
}
echo "<br>";
//$alpha = range('A', 'Z');  
for($i=1; $i<10; $i++){   
  for($j=1; $j<=$i; $j++){  
    echo  "*";//$alpha[$i];  
    }  
    echo "<br>";  
}  
for($i=10; $i>=1; $i--){   
  for($j=1; $j<=$i; $j++){  
    echo  "*";//$alpha[$i];  
    }  
    echo "<br>";  
}  
$alpha = range('A','Z');
for($i=0; $i<=10; $i++){   
  for($j=1; $j<=10; $j++){  
    echo  $alpha[$i];//$alpha[$i];  
    }  
    echo "<br>";  
}  
//$alpha = range('A','Z');
for($i=0; $i<=10; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo    "*";//$alpha[$i];//$alpha[$i];  
    }  
    echo "<br>";  
}  
//$alpha = range('A','Z');
for($i=0; $i<=10;$i++){   
  for($j=10; $j>=$i;$j--){  
    echo "*";//$alpha[$i];//$alpha[$i];  
    }  
    echo "<br>";  
}  

?>