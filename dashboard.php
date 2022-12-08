<?php
include "include/connection.php";
include "include/function.php";
// cookies-------------
$user_cookie = "username";
// cookies-------------

if(isset($_COOKIE[$user_cookie]))
{
  include "views/dashboard.php";
}
else
{
  session_start();
  $_SESSION["notice"] = "You login has expired please login again";
  header("Location: index.php");


}
?>
