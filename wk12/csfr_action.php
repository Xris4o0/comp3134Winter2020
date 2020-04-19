<form method="post">
  <input type="username" name="username" placeholder="username" />
  <input type="password" name="password" placeholder="password" />
  <input type="hidden" name="confirmation" value="confirm">
  <button type="submit">Login</button>
</form>

<?php
session_start();

$_SESSION["confirmation"]="confirm";

if(isset($_POST["username"]) and isset($_POST["password"]) and $_POST["confirmation"] == $_SESSION["confirmation"]){
  echo "<div id='splash'>";
  if($_POST["username"] == "host" and $_POST["password"] == "pass"){
    echo "You have successfully logged in!";
  }else{
    echo "You have failed to logged in!";
  }
  echo "</div>";
}
?>
