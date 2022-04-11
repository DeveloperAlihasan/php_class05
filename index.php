                                       <!-- Question 01:  -->

$given_arr = [12, 34, 2, 6, 78]; // Given Array Type : Indexed Array.
foreach ( $given_arr as $value ) {
    $numbers = $value;
    
    $flag = 0;
    // $flag variable taken to check condition true or false
    for ( $i = 2; $i < $numbers; $i++ ) {
        if ( $numbers % $i == 0 ) {
            // if given numbers are divisible by 2 then value of flag will be 1
            $flag++;
            break;
        }

    }
    // if value of flag is remain zero then it proves that number is not divisible by 2
    if ( $flag == 0 ) {
        echo $numbers . " is a prime Number" . "<br>";
    }
    
}
<br>
<br>
<br>


                                                     <!-- Question 02:  -->


<?php
$daraz = array (
  array("Vivo",20,18),
  array("oppo",18,13),
  array("samsung",15,12),
  array("tecno",17,15),
   array("walton",7,5) 
);
  
echo $daraz[0][0].": In stock: ".$daraz[0][1].", sold: ".$daraz[0][2].".<br>";
echo $daraz[1][0].": In stock: ".$daraz[1][1].", sold: ".$daraz[1][2].".<br>";
echo $daraz[2][0].": In stock: ".$daraz[2][1].", sold: ".$daraz[2][2].".<br>";
echo $daraz[3][0].": In stock: ".$daraz[3][1].", sold: ".$daraz[3][2].".<br>";
echo $daraz[4][0].": In stock: ".$daraz[4][1].", sold: ".$daraz[4][2].".<br>";


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
