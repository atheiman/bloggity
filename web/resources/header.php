<div id='header_bar' >
  <a href='./'>Home</a>
  <a href='head_link2.php'>Head Link 2</a>
  <a href='head_link3.php'>Head Link 3</a>
  <span class='right'> 
  <?php
  if (isset($_SESSION['userType'])) {
    echo "
    <a href='myaccount.php' style='margin: 0px;'>" . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</a> |
    <a href='logout.php' style='margin: 0px;'>Logout</a>
    " ;
  } else {
    echo "
    <a href='login.php' style='margin: 0px;'>Login</a>
    " ;
  }
  ?>
  </span>
</div>
<?php
if (isset($_SESSION['userType'])) {
  echo "
  <div id='admin_bar' style='width:150px;' class='center'>
    <a href='admin_link1.php'>Posts</a>
    <a href='admin_link2.php'>Pages</a>
    <a href='admin_link3.php'>Style</a>
    ";
    if ($_SESSION['userType'] == 'Administrator') {
      echo "
      <a href='admin_link4.php'>Users</a>
      ";
    }
  echo "
  </div>
  <div id='page_content' style='width:820px;'>
  ";
} else {
  echo "
  <div id='page_content' style='width:970px;'>
  ";
}
?>
