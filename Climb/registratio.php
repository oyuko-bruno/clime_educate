<?php
session_start();
header('location:loginandregiste.php');
$connection=mysqli_connect('localhost','root','');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'climb_educate');

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$password=$_POST['password'];
$pass=$_POST['pass'];


$select="select * from register where email='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into register(first,last,email,password,pass) values('$first','$last','$email',$password','$pass')";
    mysqli_query($connection,$reg);
}
?>

