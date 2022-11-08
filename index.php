<?php
require_once "config.php";
include "header.php";
// error_reporting(0);
$login_message = "";
// login
if(isset($_POST['login']))
{
  // getting user vars
  $username = $_POST['username'];
  $password = $_POST['password'];
  // getting user vars
  $getuser = "SELECT username,password FROM users WHERE username = '$username'";
  $res_user = runSelect($hos_conn,$getuser,"array");
  $row_user = count($res_user);

  if($row_user > 0)
  {
    $endpass = encPwd($password);
    $pwd = $res_user[0]['password'];

    if($pwd == $endpass)
    {
      $login_message = "User verified";
    }
    else
    {
      $login_message = "Wrong Password";
    }
  }
  else
  {
    $login_message = "No user found";
  }
}
// login
include "views/index.php";
include "footer.php";
 ?>
