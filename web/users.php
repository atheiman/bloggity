<?php
session_start();

// Testing
session_destroy();
$_SESSION['userType'] = 'Administrator';
//$_SESSION['userType'] = 'Editor';

// Secure Page
//if (!isset($_SESSION['userType'])) {header('Location: login.php');}

// Admin Only Page
//if ($_SESSION['userType'] != 'Administrator') {die('This page is restricted to Adminstrators');}

// MySQL connection
include './resources/db_connect.php';

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

<body onload="">
<?php include './resources/header.php' ; ?>
<!-- #page_content started -->
<!--<h1 class='post_title'>Test Post Title</h1>
<p>
Here is some content that is a test.
</p>
<hr>
<h1 class='post_title'>Another Test Post</h1>
<p>
This is some content of another test post.
</p>-->

<?php

$sql = "select U.* from Users as U
where U.userID = $userID;";
$result = mysqli_query($con , $sql) ;
while ($row = mysqli_fetch_array($result)) {
  $userID = $row['userID'];
  $password = $row['password'];
  $userType = $row['userType'];
  $firstName = $row['firstName'];
  $lastName = $row['lastName'];
  $email = $row['email'];
}

?>

</span>
</div>
</body>

</html>
