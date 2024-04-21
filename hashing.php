<?php
/*hashing = transforming sensitive data (password) into letters, numbers, and/or symbols
via a mathematical process. (similar to encryption)
Hides the original data from 3rd parties.
 */

 $password = "wings1234";

 $hash = password_hash($password, PASSWORD_DEFAULT);

 echo $hash;

 if (password_verify("wings1234", $hash)) {
  echo"<br>You are logged in!";
 }
 else {
  echo"<br>Incorrect password!";
 }
?>
