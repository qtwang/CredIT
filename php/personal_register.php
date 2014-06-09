<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=Edge">
</head>

<?php
if(!empty($_POST['forget'])) {
    echo '点击的是 forget ';
} elseif(!empty($_POST['p_register'])) {
  $con = mysql_connect("localhost","root","");
  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("credit", $con);
  $sql="select max(user_no) from users";
  $next=mysql_query($sql);
  $numb=mysql_fetch_array($next);
  $numb[0]++; 
  $sql="INSERT INTO users (user_no, user_name, user_email, user_password)
    VALUES
    ('$numb[0]', '$_POST[p_name]', '$_POST[p_email]', '$_POST[p_password]')";
  if (!mysql_query($sql,$con))
  {
    die('Error: ' . mysql_error());
  }
  echo "1 record added";
  mysql_close($con);
}
?>

</body>
</html>