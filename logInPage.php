<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form  method="post">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" >

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" >
        
    <input type=submit name="btn" value="login">
    
  </div>
          
  <?php
if(isset($_POST['btn'])){
    $Username = $_POST['uname'];
    $Password = $_POST['psw'];

    //$Password = 'user-input-pass';
$uppercase = preg_match('@[A-Z]@', $Password);
$lowercase = preg_match('@[a-z]@', $Password);
$number    = preg_match('@[0-9]@', $Password);
$specialChars = preg_match('@[^\w]@',$Password);
    
    if(empty($Password)){
        echo $Password.'<script> alert ("Input Your Password")</script>';
     }
  
//     elseif(!preg_match('/^(?=[a-z,0-9\d]{2})(?=.{6,12})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD',
//     $Password))
// {
// echo "input Correct Password";
// }
// else
// {
// echo "Password ok";
// }
      


elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) <6 || strlen($Password) > 12) { 
  echo 'Password should be at least 6 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
  echo 'Strong password.';
}
   }     
    

 

    

?>
</form>

</body>
</html>
