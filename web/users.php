<?php
session_start();

// Testing
//session_destroy();
//$_SESSION['userType'] = 'Administrator';
//$_SESSION['userType'] = 'Editor';

// Secure Page
//if (!isset($_SESSION['userType'])) {header('Location: login.php');}

// Admin Only Page
//if ($_SESSION['userType'] != 'Administrator') {die('This page is restricted to Adminstrators');}

// MySQL connection
include './resources/db_connect.php';

// Functions
include './resources/functions.php';

?>
<!doctype html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='./resources/style.css'>
<script src='./resources/script.js'></script>
<title>Test Bloggity</title>
<link rel='icon' type='image/png' href='files/images/generic_icon.png'/>
<style>

</style>
<script>

</script>
</head>

<body onload="removeUserColors(); ">
<?php include './resources/header.php' ; ?>
<!-- #page_content started -->

<?php

$sql = "select U.* from Users as U";
$result = mysqli_query($con , $sql) ;
while ($row = mysqli_fetch_array($result)) {
  $userID = $row['userID'];
  $password = $row['password'];
  $userType = $row['userType'];
  $firstName = $row['firstName'];
  $lastName = $row['lastName'];
  $email = $row['email'];
  echo "<div class='user_div ";
  if (isset($_GET['userID']) and test_input($_GET['userID']) == $userID) {
    echo "white_bg";
  }
  echo "'>
  $firstName $lastName<br>
  <span class='gray'>$userID</span><br>
  <a target='_blank' href='mailto:$email'>$email</a> <span class='gray'>$userType</span>
  </div><hr>";
}

?>

</span>
</div>
</body>

</html>
