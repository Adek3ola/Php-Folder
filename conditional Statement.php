<?php
    $myStringA = "My Dad will be travelling to America by thursday ,";
    $myStringB =  "while my youger siblings will be waiting for him at the airport i will be at sade house. Will you be able to meet me there ";
    $myStringC = $myStringA . $myStringB;

    $checkText = "will";
    $replaceCheckText  = ucfirst($checkText);
    $myStringD = str_replace($checkText, $replaceCheckText, $myStringC);

  
   
    $findMe = strpos($myStringD, $replaceCheckText);
    
      if ($findMe === false) {
        echo "The string '$replaceCheckText' was not found in the string '$myStringD'";
    } else {
        $count = substr_count($myStringD, $replaceCheckText);

        echo "The string '$replaceCheckText' was found in the string '$mystringC'";
        echo " and exists at position $findMe and it came out '$count' times <br />";

        if($count >= 4){

            $replaceText = str_replace("will", "shall", "$myStringD");
            echo "Replacing ...... <br />";
            echo $replaceText;
            echo  $myStringD;

        }
    }
    ?>
    

    <?php
       $accountBal = 5000;
       $incomingCash = 500;
       $deductCash =1000;
       $Interest = $accountBal + $incomingCash;
       $withdrawal =$accountBal - $deductCash;
       $ans1 = $Interest;
       $ans2 = $withdrawal;
       echo "...... <br />";
       echo "my result" . $ans1;
       echo " ...... <br />";
       echo "my result" . $ans2;

       if (  $Interest > $accountBal ){
        $myAccount= 300 + $accountBal;
        //$accountBal = +300;
        echo " ...... <br />";
        echo "My balance and Interest. '$myAccount' ";}

        if ($withdrawal > $incomingCash){
            $myAccount= $accountBal- 300 ;
             echo " ...... <br />";
             echo "You've been deducted of 300 for overdrawn and your account balance as thus. '$myAccount'";
        }
        ?>

    </body>
    
    </html>