<form method="post">
  <input type="username" name="username" placeholder="username" />
  <input type="password" name="password" placeholder="password" />
  <button type="submit">Login</button>
</form>

<?php
if(isset($_POST["username"]) and isset($_POST["password"])){
  echo "<div id='splash'>";
  if($_POST["username"] == "host" and $_POST["password"] == "pass"){
    echo "You have successfully logged in!";
  }else{
    echo "You have failed to logged in!";
  }
  echo "</div>";
}
?>

