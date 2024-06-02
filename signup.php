<?php

  include 'connect.php';
  include 'header.php';
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['username'];
    $pw = $_POST['password'];
    $hashedPassword = md5($pw);
    $checkQuery = "SELECT username FROM users WHERE username = '$uname'";
    $result = $con->query($checkQuery);
    $flag = false;
    if($result->num_rows > 0) {
      $flag = true;
    } else {
      $query = "INSERT INTO users(username, password) values ('$uname', '$pw')";
      $finalResult = $con->query($query);
      if($finalResult == true) {
        header("Location: accountCreated.php");
      }
    }
  }
?>


<form class="container" action="<?php $_SERVER['REQUEST_SELF'] ?>" method="POST">
  <h1>Authentication</h1>
  <input type="text" name="username" autocomplete="false" placeholder="Username" id="user" />
  <input type="password" name="password" autocomplete="false" placeholder="Password" id="ps"/>
  <input type="password" name="confirm" autocomplete="false" placeholder="Confirm Password" id="cps"/>
  <div class="error-password">The Password is not confirmed</div>
  <div class="error-username <?php if($flag) echo 'true' ?>">The Handle Has Been Taken</div>
  <div id="submitForm">Create Account</div>
</form>

<script src="js/signup.js"></script>
<?php include 'footer.php'; ?>