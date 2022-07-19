<?php 
// Printing our values in for loop
//   for ($Azeez=1; $Azeez<12; $Azeez++){
//     $olashile = 2 + $Azeez;
//  echo  '2 +'. $Azeez. '='.$olashile . '<br />' .'<br />';}

//   //Printing Multiplication Table
//   for ($i=2; $i<13; $i++){
//     $Azeezi = 3 * $i; 

  echo ' 3 * '. $i . ' = ' . $Azeezi . '<br />';
// }


// Summation of all numbers from 1-20;
$sum = 0;
 
for ( $i= 1; $i<21; $i++ ){

$sum = $sum + $i;

echo " $sum + $i  <br />";

//echo $sum . "<br />";

}


$sum =0;
for($i=0; $i<101; $i++){
    
    $ans = $i % 2;
    if ($ans === 0){
      $sum = $sum + $i;
        echo   $sum. "<br />";
     if($sum==380){
      break;
      
     }


        // $sum = $sum + $i;
        // echo   $sum. "<br />"; 

        
 }
 
   
}


    ?>