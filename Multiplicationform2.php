<!DOCTYPE html>

<html>

<head>
    <title> Form/Multi</title>
</head>

<body>


    <body>
        <h1 style="text-align: center;">REGISTRATION FORM</h1>
        <form name="RegForm" method="post">
            <?php //Post method Html attribute : inorder for php to access the variable in a form php need to \
            //access the name attribute ?>

            <p>Name: <input type="text" size="65" name="Name" /></p>
            

           <p> Digit: <input type="number"  size="65" name = "myValue"/> </p>
           <p>
                <input type="submit" value="send" name="Submit" />
                
            </p>

            <?php

            // $firstName = "Azeez";
            // $SuName = "Adekunle";
            // $fullName = "firstName" + "SuName";

            if (isset($_POST['Submit'])) {
          
                $username = $_POST['Name' ];
                $digit = $_POST['myValue'];
                echo "Weicome " .  $username . "  You Demanded to see " . $digit .  " Multiplication Table <br />";
               

                for ($i=2; $i<13; $i++){
                         $Azeezi = $digit * $i; 
                    
                       echo  $digit . ' * '  . $i . ' = ' . $Azeezi . '<br />';
       
                }
            }
              
                 
        





            ?>




</body>

</html>