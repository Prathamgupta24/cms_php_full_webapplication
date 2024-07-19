<?php
if(isset($_POST['loginbtn']))
{
$email=$_POST['email'];
$password=$_POST['password'];
if($email =='admin@gmail.com' && $password =='admin12345')
{
   session_start();
$_SESSION['login']=true;
header('Location: ../index.php');
}
else
{
header('Location: ../login.php');
alert("username or password is wrong");
}
}
?>