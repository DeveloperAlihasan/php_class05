                                       <!-- Question 01:  -->

<?php
//$arr = array[12,34,2,6,78];//index array
// $num = 12;  
// $count=0;  
// for ( $i=1; $i<=$num; $i++)  
// {  
// if (($num%$i)==0)  
// {  
// $count++;  
// }  
// }  
// if ($count<3)  
// {  
// echo "$num is a prime number."."<br>";  
// }
// else
// {
// echo "$num is not a prime number."."<br>"; 
// }
// $num = 34;  
// $count=0;  
// for ( $i=1; $i<=$num; $i++)  
// {  
// if (($num%$i)==0)  
// {  
// $count++;  
// }  
// }  
// if ($count<3)  
// {  
// echo "$num is a prime number."."<br>";  
// }
// else
// {
// echo "$num is not a prime number."."<br>"; 
// }
// $num = 2;  
// $count=0;  
// for ( $i=1; $i<=$num; $i++)  
// {  
// if (($num%$i)==0)  
// {  
// $count++;  
// }  
// }  
// if ($count<3)  
// {  
// echo "$num is a prime number."."<br>";  
// }
// else
// {
// echo "$num is not a prime number."."<br>"; 
// }

 ?>
<br>
<br>
<br>


                                                     <!-- Question 02:  -->


<?php
$daraz = array (
  array("Vivo",20,18),
  array("oppo",18,13),
  array("samsung",15,12),
  array("tecno",17,15)
);
  
echo $daraz[0][0].": In stock: ".$daraz[0][1].", sold: ".$daraz[0][2].".<br>";
echo $daraz[1][0].": In stock: ".$daraz[1][1].", sold: ".$daraz[1][2].".<br>";
echo $daraz[2][0].": In stock: ".$daraz[2][1].", sold: ".$daraz[2][2].".<br>";
echo $daraz[3][0].": In stock: ".$daraz[3][1].", sold: ".$daraz[3][2].".<br>";


?>
<br>
<br>
<br>

                                                     <!-- Question 03:  -->

<?php 

$arr= array(0,10,80,67,60,89,91,56,45,30,95,83,99);
//using foreach loop
$b = 0;

foreach ($arr as $key=>$val)
 {
    if ($val > $b) {
        $b = $val;
    }
}
echo $b;
?>
<br>
<br>
<br>
                                                           <!-- Question 04:  -->

<?php
$arr= array(0,10,80,67,60,89,91,56,45,30,95,83,99);



foreach ($arr as $key => $arr) {
    if($key % 2 ==0 ){
       continue;
    }else{
        echo $arr."<br>";
    }
    
}

?>