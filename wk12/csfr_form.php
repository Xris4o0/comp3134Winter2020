<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

session_start();

$_SESSION["confirmation"] = generateRandomString(5);

?>

<form name="myForm" id="myForm" action="csfr_action.php" method="post">
  <input type="username" name="username" placeholder="username" value="host" />
  <input type="password" name="password" placeholder="password" value="pass" />
  <input type="hidden" name="confirmation" value=<?php$_SESSION["confirmation"]?> />
  <button type="submit">Login</button>
</form>
<script>
  window.onload=function(){
      document.forms["myForm"].submit();
  }
</script>
