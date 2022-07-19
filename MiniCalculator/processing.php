<?php
include 'Calculation.php';

if(!isset($_post['submit'])){
die("Error: submit button not clicked");
}

$First_Number=$_POST['First_Number'];
$Second_Number=$_POST['Second_Number'];
$Operation=$_POST['Operation'];

?>