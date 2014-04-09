<?php
session_start();
// Testing
$_SESSION["userType"] = "Administrator";

// Secure Page
//if (!isset($_SESSION["userType"])) {header("Location: login.php");}

// Admin Only Page
//if ($_SESSION["userType"] != "Administrator") {die("This page is restricted to Adminstrators");}

// MySQL connection
include "./resources/db_connect.php";

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./resources/style.css">
<script src="./resources/script.js"></script>
<title>Test Bloggity</title>
<link rel="icon" type="image/png" href="files/images/generic_icon.png"/>
<style>

</style>
<script>

</script>
</head>

<body onload="">
<?php include "./resources/header.php" ; ?>
<!-- #page_content started -->
Content of Page

</body>

</html>
