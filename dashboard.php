<?php
include 'header.php';
session_start();
if(isset($_SESSION['username'])) {
  echo "<h1>welcome " . $_SESSION['username'] . "</h1>";
} else {
  header('Location: index.php');
}
?>
<link rel="stylesheet" href="style.css">

<a href="logout.php" class="logout">logout</a>
<?php include 'footer.php';