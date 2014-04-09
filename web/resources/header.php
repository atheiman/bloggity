<div id="header_bar" class="gray_bg center">
<a href="../blog/">BLOG</a>
<a href="../pages/page1">PAGE 1</a>
<a href="../pages/page2">PAGE 2</a>
</div>
<?php
if (isset($_SESSION["userType"])) {
  echo "
  <div id='admin_bar' class='black_bg white'>
  Welcome, User <span class='right'>Logout</span>
  <div id='admin_links'>
  <a href='./post.php'>Post</a>
  <a href='./pages.php'>Pages</a>
  ";
  if ($_SESSION["userType"] == "Administrator") {
    echo "
    <a href='./users.php'>Users</a>
    ";
  }
  echo "
  </div>
  </div>
  ";
}
?>
