<?php
// function to run Mysql query-----------------------
function runSelect($conn,$query,$fetchtype)
{
  $query = mysqli_query($conn,$query) or die ($query . mysqli_error());
  $dbreturn = array();
  $i = 0;
  $fetch = "mysqli_fetch_".$fetchtype;

  while(@$queryrow = $fetch($query))
  {
    $dbreturn[$i] = $queryrow;
    $i++;
  }
  return $dbreturn;
}
// function to run Mysql query-----------------------

// password encryption function----------------
function encPwd($password)
{
  $normal_text = $password;

  $cryptStr = $normal_text;
  $encpassword = crypt($cryptStr,'$1$hospitalisniggahouse$');

  return $encpassword;
}
// password encryption function----------------
?>
