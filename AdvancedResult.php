<?php 

 require_once('Calculation.php');

?>


<!DOCTYPE html>

<html>

<head>
    <title> Form/Result</title>
</head>

<style>
    table {
    border-collapse: collapse;
    width: 50%;
    border: 5px solid #ccc;
    text-align: center;
}

#center {
    width: 50%;
}
</style>


<html>
    <body style="background-color:green ;">
        <center><h1 style="color:yellow ;"><b>STUDENT RESULT PORTAL</b></h1></center>
        <form action="" method="post">
        <table border=8>
                    <tr>
                        <td style="color:yellow ;">
                        Name
                        </td>
                        <td>
             <input type="text" size="30" name="Name" />
                       </td>
                       </tr>

                        <tr>
                        <td style="color:yellow ;">
                        Physics
                        </td>
                        <td>
             <input type="text" size="20" name="Physics" />      
                        </td>
                        </tr>

                        <tr>
                        <td style="color:yellow ;">
                        Chemistry
                        </td>
                        <td>
             <input type="text" size="20" name="Chemistry" /> 
                        </td>
                        </tr>

                        <tr>
                        <td style="color:yellow ;">
                        Mathematic
                        </td>
                        <td>
            <input type="text" size="20" name="Math" /></p>
                        </td>
                        </tr>

            
                       <tr>
                        <td style="color:yellow ;">
                        English-lang
                        </td>
                        <td>
            <input type="text" size="20" name="English" /></p>
                        </td>
                        </tr>
                        </table>
                <br>
               
                    
                
                
                <input type=submit name="btn" value="Result">

                <?php 
              

              if(!isset($_POST['btn'])){
                  die("Error:submit button not clicked");
              }else{
              
               
              $Name =$_POST['Name'];
              $Physics =$_POST['Physics'];
              $Chemistry =$_POST['Chemistry'];
              $Math =$_POST['Math'];
              $English =$_POST['English'];
              
              $classResult = new Result();
          
              
              $studentName   = $classResult->setCalcName($Name);
              $getStudentName = $classResult->getCalcName();
              echo "<br /> <h3 style=color:yellow;> $getStudentName <h3> <br />";
              
              $setPhysics    = $classResult->setScore($Physics);
              $getPhysics    = $classResult->getScore();
              $getPhysicsGrade  =  $classResult->getGrade($Physics);
              

              $setChemistry    = $classResult->setScore($Chemistry);
              $getChemistry   = $classResult->getScore();
              $getChemistryGrade  =  $classResult->getGrade($Chemistry);
              
              

              $setMath    = $classResult->setScore($Math);
              $getMath   = $classResult->getScore();
              $getMathGrade  =  $classResult->getGrade($Math);
              
              
              $setEnglish    = $classResult->setScore($English);
              $getEnglish   = $classResult->getScore();
              $getEnglishGrade  =  $classResult->getGrade($English);
              
              }
              
              ?>
                             
    <table border="1">
    <tr style="color:yellow ;">
        <th>Subject</th>
        <th>Score</th>
        <th>grade</th>
    </tr>

    <tr style="color:yellow ;">
        <td>Physics</td>
        <td><?php echo $getPhysics;?></td>
        <td><?php echo $getPhysicsGrade;?></td>
    </tr>

    <tr style="color:yellow ;">
        <td>Chemistry</td>
        <td><?php echo $getChemistry;?></td>
        <td><?php echo $getChemistryGrade;?></td>
    </tr>

    <tr style="color:yellow ;">
        <td>Math</td>
        <td><?php echo $getMath;?></td>
        <td><?php echo $getMathGrade;?></td>
    </tr>

    <tr style="color:yellow ;">
        <td>English</td>
        <td><?php echo $getEnglish;?></td>
        <td><?php echo $getEnglishGrade ;?></td>
    </tr>

        </table>
        </form>
    </body>
</html>

      

            
