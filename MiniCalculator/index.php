<?php 
// include 'Calculation.php'

?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>

<body>
    <h1>MINI CALCULATOR</h1>
<form action = "processing.php" method="POST">

<input type="text" name="First_Number" placeholder="First_Number"/>
<br />
<br />
<input type="text" name="Second_Number"placeholder="Second_Number"    />
<br />      
<br />
<select name="Operation">
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Divide">Divide</option>
        <option value="Multiply">Multiply</option>
</select>
<br />
<input type="submit" value="Calculate" name="submit"/>
</form>







</body>
</html>