<!DOCTYPE html>
<html>
    <head>
        <Title>Tutorial </Title>
    </head>
<body style="background-color: green;">

<h1><p style="color:white;">
This paragraph
contains a lot of lines
in the source code,
but the browser 
ignores it.
</p></h1>

<h1><p style="color:white">
This paragraph
contains      a lot of spaces
in the source     code,
but the    browser 
ignores it.
</p></h1>

<h2><p>
The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.
</p></h2>
<?php echo '<h1 style="color: white;"> <br /> Next Line </h1>'; 
$var1  = 5;
$var2 = 6;

$ans = $var1 + $var2;

echo "Addition is " . $ans; 
?>
 
<?php echo '<h1 style="color: white;"> <br /> Next Line </h1>';
$varShile = 34;
$varAzeez = 5;

$results = $varShile * $varAzeez;

echo "Multiplication" . $results; 
?>

<?php echo '<h1 style="color: white;"> <br /> Next Line </h1>';
$varShile = 49;
$varAzeez = 7;

$results = $varShile / $varAzeez;

echo "Division" . $results; 
?>



<?php echo '<h1 style="color: white;"> <br /> Next Line </h1>';

$varShile = 34;
$varAzeez = 5;

$results = $varShile - $varAzeez;

echo "substraction" . $results;

?>




</body>
</html>
