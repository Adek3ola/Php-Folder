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
    <body>
        <form action="" method="post">
        <table border=8>
                    <tr>
                        <td>
                        Name
                        </td>
                        <td>
             <input type="text" size="30" name="Name" />
                       </td>
                       </tr>

                        <tr>
                        <td>
                        Physics
                        </td>
                        <td>
             <input type="text" size="20" name="Physics" />      
                        </td>
                        </tr>

                        <tr>
                        <td>
                        Chemistry
                        </td>
                        <td>
             <input type="text" size="20" name="Chemistry" /> 
                        </td>
                        </tr>


 
                        <tr>
                        <td>
                        Mathematic
                        </td>
                        <td>
            <input type="text" size="20" name="Math" /></p>
                        </td>
                        </tr>

            
           
           
                        <tr>
                        <td>
                        English-lang
                        </td>
                        <td>
            <input type="text" size="20" name="English" /></p>
                        </td>
                        </tr>
                        </table>
                <br>
                <br>
                    
                
                
                <input type=submit name="btn" value="Result">
            
            <?php
if(isset($_POST['btn']))
{
 
    $a=$_POST['Name']; 
    $a1=$_POST['Physics']; 
    $a2=$_POST['Chemistry']; 
    $a3=$_POST['Math']; 
    $a4=$_POST['English']; 
    $sum=$a1+$a2+$a3+$a4;
    $avg=$sum/4;
     $totalGrade = "";
     $classGrade = "";
     $chemGrade = "";
     $MatGrade = "";
     $EngGrade = "";
     $Percentage = $sum / 400;  
     $ans = $Percentage * 100;
     if(empty($a1)){
        echo '<script> alert ("Enter value")</script>';
     }
     
     else{


        if((($a1>=0)&&($a1<=50))){
            $classGrade="Fail";
        }
           
        elseif(($a1>50)&&($a1<=70)){
            $classGrade="C";
        }
           
        elseif(($a1>70&&$a1<=80)){
            $classGrade="B";
        }
          
        elseif(($a1>80&&$a1<=90)){
            $classGrade="A";
        }
            
        elseif(($a1>90)){
            $classGrade ="Execellent";
        }
    

     }

     if(empty($a2)){
        echo '<script> alert ("Enter value")</script>';
     }else{

        if((($a2>=0)&&($a2<=50))){
            $chemGrade="Fail";
        }
           
        elseif(($a2>50)&&($a2<=70)){
            $chemGrade="C";
        }
           
        elseif(($a2>70&&$a2<=80)){
            $chemGrade="B";
        }
          
        elseif(($a2>80&&$a2<=90)){
            $chemGrade="A";
        }
            
        elseif(($a2>90)){
            $chemGrade ="Execellent";
        }
    

     }


     if(empty($a3)){
        echo '<script> alert ("Enter value")</script>';
     }else{

        if((($a3>=0)&&($a3<=50))){
            $MatGrade="Fail";
        }
           
        elseif(($a3>50)&&($a3<=70)){
            $MatGrade="C";
        }
           
        elseif(($a3>70&&$a3<=80)){
            $MatGrade="B";
        }
          
        elseif(($a3>80&&$a3<=90)){
            $MatGrade="A";
        }
            
        elseif(($a3>90)){
            $MatGrade ="Execellent";
        }
    

     }
       


     if(empty($a4)){
        echo '<script> alert ("Enter value")</script>';
     }else{

        if((($a4>=0)&&($a4<=50))){
            $MatGrade="Fail";
        }
           
        elseif(($a4>50)&&($a4<=70)){
            $EngGrade="C";
        }
           
        elseif(($a4>70&&$a4<=80)){
            $EngGrade="B";
        }
          
        elseif(($a4>80&&$a4<=90)){
            $EngGrade="A";
        }
            
        elseif(($a4>90)){
            $EngGrade ="Execellent";
        }
    

     }
     
    //  echo '<table></table> style="width:500px;border:2px solid green;"><tr><td style="border:1px solid blue">Sub Total:</td><td style="border:1px solid blue">"'.$subTotal.'"</td></tr><tr><td style="border:1px solid blue">Number Of Options:</td><td style="border:1px solid blue">"'.$numOpt.'"</td></tr><tr><td style="border:1px solid blue">Options Total:</td><td style="border:1px solid blue">"'.$totalTop.'"</td></tr><tr><td style="border:1px solid blue">Total:</td><td style="border:1px solid blue">"'.$total.'"</td></tr></table>';   
    
    
    echo "<br>";
     echo "Student Name:-".$a."<br>" ."<br>"; 
    echo "Display Results Below". "<br>" ."<br>"; 
    // echo "physics =".$a1. $classGrade."<br> ";
    // echo "Chemistry =".$a2.$chemGrade."<br> ";
    // echo "Math =".$a3.$MatGrade."<br> ";
    // echo "English =".$a4.$EngGrade."<br>" ."<br>";
    // echo "Total marks =".$sum."<br>"; 
    // echo "Percentage Score is =".$ans."<br> ";
    
}


?>

<table border="1">
    <tr>
        <th >Subject</th>
        <th>Score</th>
        <th>grade</th>
    </tr>
    <tr>
        <td>Physics</td>
        <td><?php echo $a1;?></td>
        <td><?php echo $classGrade;?></td>
    </tr>

    <tr>
        <td>Chemistry</td>
        <td><?php echo $a2;?></td>
        <td><?php echo $chemGrade;?></td>
    </tr>

    <tr>
        <td>Math</td>
        <td><?php echo $a3;?></td>
        <td><?php echo $MatGrade;?></td>
    </tr>

    <tr>
        <td>English</td>
        <td><?php echo $a4;?></td>
        <td><?php echo $EngGrade;?></td>
    </tr>

    <tr>
        <td>Total marks</td>
        <td><?php echo $sum;?></td>
        
    </tr>

    <tr>
        <td>Percentage Score</td>
        <td><?php echo $ans;?></td>
        
    </tr>


</table>
            
        </form>
    </body>
</html>