<?php
  session_start();
  if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
  }

  include 'header.php';
  include 'connect.php';
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $p = $_POST['password'];
    $hp = md5($p);
    $q = "SELECT username, password from users where username = '$name' and password = '$p'";
    $result = $con->query($q);
    if($result->num_rows > 0) {
      $_SESSION['username'] = $name;
      header("Location: dashboard.php");
    } else {
      header("Location: index.php");
    }
  }
?>


<form class="container" action="<?php $_SERVER['REQUEST_SELF'] ?>" method="POST">
  <h1>Authentication</h1>
  <input type="text" name="username" autocomplete="off" placeholder="Username" />
  <input type="password" name="password" autocomplete="off" placeholder="Password"/>
  <input type="submit" id="submitLogin">
  <a href="signup.php">Don't Have An Account?</a>
</form>
<script src="js/main.js"></script>
<?php include 'footer.php'; ?>