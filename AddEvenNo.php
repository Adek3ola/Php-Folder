<!DOCTYPE html>

<html>

<head>
    <title> Form/Multi</title>
</head>

<body>


    <body>
        <h1 style="text-align: center;">EVEN && ODD NO FORM</h1>
        <form name="RegForm" method="post">
            <?php //Post method Html attribute : inorder for php to access the variable in a form php need to \
            //access the name attribute ?>

            <p>Name: <input type="text" size="65" name="Name" /></p>
            

           <p> Digit: <input type="number"  size="65" name = "myValue"/> </p>
           <p>
                <input type="submit" value="send" name="Submit" />
                
            </p>

            <?php

if(isset($_POST['Submit'])){
    $Username = $_POST['Name'];
    $Digit = $_POST['myValue'];
    
    $sum =0;
    $i = 0;
    //While Loop
        while($i < $Digit){

            $i++;
            
                $ans = $i % 2;
                if ($ans === 0){
                      $sum = $sum + $i;
                        echo   $sum."+ ". $i ."<br />";
                
                    }
        }

    //Foor Loop
// for($i=0; $i<$Digit; $i++){
    
//     $ans = $i % 2;
//     if ($ans === 0){
//       $sum = $sum + $i;
//         echo   $sum."+ ". $i ."<br />";

//     }
// }
    
}



                
            
              
                 
        





            ?>




</body>

</html>