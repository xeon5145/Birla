<?php
require_once "config.php";
include "header.php";
// error_reporting(0);
$login_message = "";
// cookies-------------
$user_cookie = "username";
// cookies-------------

// redirecting to dashboard if cookie is set-----------------
if(isset($_COOKIE[$user_cookie]))
{
  header("Location: dashboard.php");
}
else
{
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
        include "mailer.php";

        $mail->IsHTML(true);
        $mail->Subject = 'Account Login';
        $mail->Body    = '<p>
                          Hi ,<br />
                          Your account has been logged In successfully on '.date("d M Y")." , ".date("l").'
                          </p><br />
                          <sub style="color: red; font-weight: bold;">If this was not you , please change your password . Visit this page to reset your password : <a href="'.$url.'/Birla/frgtpwd.php">Reset Password</a></sub><br/>
                          <p>With Regards</p>
                          <p>Hospital Project</p>';
        $mail->AltBody = '<p>
                          Hi ,<br />
                          Your account has been logged In successfully on '.date("d M Y")." , ".date("l").'
                          </p><br />
                          <sub style="color: red; font-weight: bold;">If this was not you please change your password . Visit this page to reset your password : <a href="'.$url.'/Birla/frgtpwd.php">Reset Password</a></sub><br/>
                          <p>With Regards</p>
                          <p>Hospital Project</p>';

        $mail->addAddress('abhisheksingh5145@gmail.com');
        if(!$mail->send())
        {
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
         else
        {
            $un_cookie = $username;
            setcookie($user_cookie, $un_cookie, time() + (86400/48), "/");
            header("Location: dashboard.php");
        }

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
}
// redirecting to dashboard if cookie is set-----------------

include "views/index.php";
include "footer.php";
 ?>
