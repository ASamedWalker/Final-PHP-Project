<?php
include("Header.php");

// require("Mysqli_connect.php");
?>

<h2>Login </h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="tini.jpeg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="pword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pword" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
    <span><a href="./Sign_up.php"> | Sign up |</a></span>
  </div>
</form>

<?php
include("footer.php");
?>