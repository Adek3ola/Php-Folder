<!DOCTYPE html>
<html>

<head>
    <Title>Tutorial </Title>
</head>

<body style="background-color: green;">
    <?php
    $varB = 3;
    $varY = -$varB;
    $varA = 2;
    $varC = 5;
    $varD = $varY + sqrt(abs($varB - (4 * $varA * $varC)));

    $h = $varC + $varY;
    $varE = 2 * $varA;
    $ans =  $varY + $VarD / $varE;

    echo "X positive is = " . $ans . " D  is " . $varD . " .... " . $h . " ddd " . $varA .  "  " . $varC;

    echo "<br /> $varY + sqrt( $varB - (4 * $varA * $varC)) ";

    $jabe = $varB - (4 * $varA * $varC);

    echo " <br /> Resukt is ,,,,  $jabe ";
    ?> <br />

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

</body>

</html>