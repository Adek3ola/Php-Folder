<?php 
$accountBal = 0;
$creditAmount = 5000;
$debitAmount = 10000;
$charges = 500;
$limit =10000;
$totalBal = $accountBal + $creditAmount;
$totalbal2 = $debitAmount - $charges;


if($creditAmount > 0 ){

   
   $myTotal = $accountBal + $creditAmount + $charges;
    echo " ...... <br />";
    echo "My balance and Interest. '$myTotal' ";


}
 elseif 
    ($debitAmount > $limit){
    $myAvailableBal = $myTotal - $totalbal2;
    echo " ...... <br />";
    echo "You've been deducted of 700 for overdrawn and your account balance as thus. '$myAvailableBal' ";
   }

else {//$debitAmount < $limit;
    echo " ...... <br />";
      $myAvailableBal2 = $accountBal-$debitAmount;
    echo "My balance. '$myAvailableBal2' ";
}






?>