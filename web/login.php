<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_SESSION['userType'])) {header('Location: index.php');}

// MySQL connection
include './resources/db_connect.php';

// PHP Functions
include './resources/functions.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //var_dump($_POST); echo "<hr>";
  $email_input = test_input($_POST['email_input']) ;
  $password_input = test_input($_POST['password_input']) ;
  $sql = "select U.* from Users as U
  where U.email = '$email_input'" ;
  $result = mysqli_query($con,$sql);
  if ($result->num_rows == 0 ) {
    $error = 'email not found';
  } else {
    while($row = mysqli_fetch_array($result)) {
      //var_dump($row); echo "<hr>";
      $userID = $row['userID'];
      $password = $row['password'];
      $userType = $row['userType'];
      $firstName = $row['firstName'];
      $lastName = $row['lastName'];
      $email = $row['email'];
    }
    if ($password_input == $password) {
      // Set Session vars
      $_SESSION['userID'] = $userID;
      $_SESSION['userType'] = $userType;
      $_SESSION['firstName'] = $firstName;
      $_SESSION['lastName'] = $lastName;
      $_SESSION['email'] = $email;
      echo "<script>window.location.assign('index.php')</script>";
    } else {
      $error = 'incorrect password';
    }
  }
}
?>
<!doctype html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='./resources/style.css'>
<script src='./resources/script.js'></script>
<title>Test Bloggity</title>
<link rel='icon' type='image/png' href='files/images/generic_icon.png'/>
<style>
  div {
    margin: 15px 0px;
  }
</style>
<script>

</script>
</head>

<body onload="">
<div>
Login to Bloggity
</div>
<div id='content'>
<form method='post' name='login_form' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
Email: <input id='email_input' type='email' name='email_input' size='20' required><br>
Password: <input id='password_input' type='password' name='password_input' size='20' required><br>
<input type='submit' value='Login'><br>
</form>
<div class='red'>
<?php
if ($error != '') {echo "Error: " . $error;}
echo "<script>";
if ($error == 'incorrect password') {
  echo "
  document.forms['login_form']['email_input'].value = '" . $_POST['email_input'] . "';
  document.getElementById('password_input').focus();
  ";
} else {
  echo "
  document.getElementById('email_input').focus();
  ";
}
echo "</script>";
echo "<hr>";
//var_dump($error);
?>
</div>
</div>

</body>

</html>
