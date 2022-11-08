<?php
require_once "config.php";
include "header.php";
// error_reporting(0);

// login
if(isset($_POST['login']))
{
  // getting user vars
  $username = $_POST['username'];
  $password = $_POST['password'];
  // getting user vars
  $getuser = "SELECT * FROM users WHERE username = '$username'";
  $res_user = runSelect($hos_conn,$getuser,"array");
  $row_user = count($res_user);

  if($row_user > 0)
  {
    $endpass = encPwd($password);
    $pwd = $res_user[0]['password'];

    if($pwd == $endpass)
    {
      echo "User verified";
    }
    else
    {
      echo "Wrong Password";
    }
  }
  else
  {
    echo "No user found";
  }
}
// login
include "views/index.php";
include "footer.php";
 ?>
