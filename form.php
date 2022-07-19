<!DOCTYPE html>

<html>

<head>
    <title> Form</title>
</head>

<body>


    <body>
        <h1 style="text-align: center;">REGISTRATION FORM</h1>
        <form name="RegForm" method="post">

            <p>Name: <input type="text" size="65" name="Name" /></p>

            <br />

            <p>Address: <input type="text" size="65" name="Address" />
            </p>

            <br />

            <p>E-mail Address: <input type="text" size="65" name="EMail" /></p>

            <br />

            <p>Password: <input type="text" size="65" name="Password" /></p>

            <br />

            <p>Telephone: <input type="text" size="65" name="Telephone" /></p>

            <br />


           <p>Comments: <textarea cols="55" name="Comment"> </textarea></p>


            <p>
                <input type="submit" value="send" name="Submit" />
                <input type="reset" value="Reset" name="Reset" />
            </p>

            <?php

            if (isset($_POST['Submit'])) {
          
                $username = $_POST['Name'];
                echo $username . "<br />";
                for($name=0; $name<5; $name++){
               // echo "Future Dice" . $name. "<br />";
                echo rand(1,50) . "<br />";
                if($name == 1){
                    break;
                }
              
                 }
                

            }
        ?>
</body>

</html>