<div id='header_bar' class='center'>
  <a href='head_link1.php'>Head Link 1</a>
  <a href='head_link2.php'>Head Link 2</a>
  <a href='head_link3.php'>Head Link 3</a>
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
  <div id='page_content' style='width:850px;'>
  ";
} else {
  echo "
  <div id='page_content' style='width:1000px;'>
  ";
}
?>
