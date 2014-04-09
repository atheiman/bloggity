<?php
session_start();
// Testing
$_SESSION["userType"] = "Administrator";

// Secure Page
//if (!isset($_SESSION["userType"])) {header("Location: login.php");}

// Admin Only Page
//if ($_SESSION["userType"] != "Administrator") {die("This page is restricted to Adminstrators");}

// MySQL connection
include $_SERVER['DOCUMENT_ROOT']."/bloggity/resources/db_connect.php";

?>
<!doctype html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/bloggity/resources/head_tags.php" ?>
<style>

</style>
<script>

</script>
</head>

<body onload="">
<?php
include $_SERVER['DOCUMENT_ROOT']."/bloggity/resources/header.php";
?>

got this far
</body>

</html>
