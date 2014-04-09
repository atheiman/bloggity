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
<?php include "./resources/head_tags.php" ?>
<style>

</style>
<script>

</script>
</head>

<body onload="">


</body>

</html>
