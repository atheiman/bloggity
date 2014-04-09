<div id='header_bar' class='center'>
  <a href='head_link1.php'>Head Link 1</a>
  <a href='head_link2.php'>Head Link 2</a>
  <a href='head_link3.php'>Head Link 3</a>
</div>
<?php
if (isset($_SESSION['userType'])) {
  echo "
  <div id='admin_bar' style='width:150px;' class='gray_bg center'>
    <a href='admin_link1.php'>Link1</a>
    <a href='admin_link2.php'>Link2</a>
    <a href='admin_link3.php'>Link3</a>
  </div>
  <div id='page_content' style='width:850px;'>
  ";
} else {
  echo "
  <div id='page_content' style='width:1000px;'>
  ";
}
?>
